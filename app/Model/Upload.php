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
	public function uploadFiles($folder, $formdata, $itemId = null) {
		// setup dir names absolute and relative
		$folderUrl = Configure::read('OpenSGA.save_path') . DS . $folder.DS;
		$relUrl = $folder;

		// create the folder if it does not exist
		if (!is_dir($folderUrl)) {
			mkdir($folderUrl, 0777, true);
		}



		// if itemId is set create an item folder
		if ($itemId) {
			// set new absolute folder
			$folderUrl = Configure::read('OpenSGA.save_path') . DS . $folder . DS . $itemId . DS . date('Y').DS;
			// set new relative folder
			$relUrl = $folder . DS . $itemId . DS . date('Y');
			// create directory
            $isDir = is_dir($folderUrl);
			if (!is_dir($folderUrl)) {
                debug($isDir);
				mkdir($folderUrl, 0777, true);
				chmod($folderUrl, 0755);
			}
		} else{
            $folderUrl = Configure::read('OpenSGA.save_path') . DS . $folder . DS . date('Y').DS;
            $relUrl = $folder . '/' . date('Y');
            if (!is_dir($folderUrl)) {
                mkdir($folderUrl, 0777, true);
                chmod($folderUrl, 0755);
            }
            chmod($folderUrl, 0755);
        }

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
						// check filename already exists
						if (!file_exists($folderUrl . '/' . $filename)) {
							// create full filename
							$fullUrl = $folderUrl . '/' . $filename;
							$url = $relUrl . '/' . $filename;
							// upload the file
							$success = move_uploaded_file($file['tmp_name'], $fullUrl);
						} else {
							// create unique filename and upload file
							ini_set('date.timezone', 'Europe/London');
							$now = date('Y-m-d-His');
							$fullUrl = $folderUrl . '/' . $now . $filename;
							$url = $relUrl . '/' . $now . $filename;
							$success = move_uploaded_file($file['tmp_name'], $fullUrl);
						}
						// if upload was successful
						if ($success) {
							// save the url of the file
							$result['urls'][] = $url;
						} else {
							$result['errors'][] = "Error uploaded $filename. Please try again.";
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
