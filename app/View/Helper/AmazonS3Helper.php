<?php
App::uses('AppHelper', 'Helper');
App::import('Helper', 'AppHelper');

/**
 * Helper for working with PHPExcel class.
 * PHPExcel has to be in the vendors directory.
 */
class AmazonS3Helper extends AppHelper
{


    public $s3Client;

    /**
     * Constructor
     */
    public function __construct(View $view, $settings = [])
    {
        parent::__construct($view, $settings);

        $this->s3Client = Aws\S3\S3Client::factory([
            'key' => S3KEY,
            'secret' => S3SECRET,
            'region' => S3REGION,
        ]);

    }


    public function getSignedUrl($path, $bucket = null, $expiry = '+10 minutes')
    {


        if (!$bucket) {
            $bucket = S3BUCKET;
        }
        if ($this->s3Client->doesObjectExist($bucket, $path)) {
            $request = $this->s3Client->get($bucket . $path);

            return $this->s3Client->createPresignedUrl($request, '+10 minutes');
        } else {
            return false;
        }


    }

    public function getObject($path, $bucket = null, $saveAs = null)
    {
        if (!$bucket) {
            $bucket = S3BUCKET;
        }


        $result = $this->s3Client->getObject([
            'Bucket' => $bucket,
            'Key' => $path,
            'SaveAs' => $saveAs,
        ]);


        return $result['Body']->getUri();

    }
}