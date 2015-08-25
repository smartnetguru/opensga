<?php

App::uses('AppModel', 'Model');

/**
 * Upload Model
 *
 * @property TipoUpload $TipoUpload
 * @property EstadoUpload $EstadoUpload
 */
class Upload extends AppModel {
	//The Associations below have been created with all possible keys, those that are not needed can be removed

	/**
	 * belongsTo associations
	 *
	 * @var array
	 */
	public $belongsTo = array(
		'TipoUpload' => array(
			'className' => 'TipoUpload',
			'foreignKey' => 'tipo_upload_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'EstadoUpload' => array(
			'className' => 'EstadoUpload',
			'foreignKey' => 'estado_upload_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);

	/**
	 * uploads files to the server
	 * @params:
	 * 		$folder 	= the folder to upload the files e.g. 'img/files'
	 * 		$formdata 	= the array containing the form files
	 * 		$itemId 	= id of the item (optional) will create a new sub folder
	 * @return:
	 * 		will return an array with the success of each file upload
	 */
	public function uploadFiles($folder, $formdata, $itemId) {


		// list of permitted file types, this is only images but documents can be added
		$permitted = array('image/gif', 'image/jpeg', 'image/pjpeg', 'image/png', 'text/plain', 'application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');

		// loop through and deal with the files
		foreach ($formdata as $file) {
			// replace spaces with underscores
			$filename = str_replace(' ', '_', $file['name']);
			// assume filetype is false
			$typeOK = false;
			// check filetype is ok
			foreach ($permitted as $type) {
				if ($type == $file['type']) {
					$typeOK = true;
					break;
				}
			}

			// if file type ok upload the file
			if ($typeOK) {

				// switch based on error code
				switch ($file['error']) {
					case 0:
                        $filePath = $folder.'/'.$itemId;
                        $s3Client = Aws\S3\S3Client::factory([
                            'key'    => S3KEY,
                            'secret' => S3SECRET,
                            'region' => S3REGION
                        ]);
                        $fileExists = $s3Client->doesObjectExist(S3BUCKET, $filePath);
                        if($fileExists){
                             $filePath = $folder.'/'.date('Y-m-d-His').$itemId;;
                        }
                        try{
                            // Upload a file.
                            $upload = $s3Client->putObject(array(
                                'Bucket'       => S3BUCKET,
                                'Key'          => $filePath,
                                'SourceFile'   => $file['tmp_name'],
                                'ContentType'  => $file['type'],
                            ));

                            // We can poll the object until it is accessible
                            $s3Client->waitUntil('ObjectExists', array(
                                'Bucket' => S3BUCKET,
                                'Key'    => $filePath
                            ));

                            $result['urls'][] = $upload['ObjectURL'];
                            $result['path'][] = $filePath;
                        } catch(S3Exception $e){
                            $this->log($e->getMessage());
                        }

						break;
					case 3:
						// an error occured
						$result['errors'][] = "Error uploading $filename. Please try again.";
						break;
					default:
						// an error occured
						$result['errors'][] = "System error uploading $filename. Contact webmaster.";
						break;
				}
			} elseif ($file['error'] == 4) {
				// no file was selected for upload
				$result['nofiles'][] = "No file Selected";
			} else {
				// unacceptable file type
				$result['errors'][] = "$filename cannot be uploaded. Acceptable file types: gif, jpg, png.";
			}
		}

		return $result;
	}

}
