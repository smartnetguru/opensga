<?php


class OpenSGAAmazonS3
{


    public $s3Client;

    /**
     * Constructor
     */
    public function __construct()
    {
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

    public function moveObject($path, $newPath)
    {
        // Copy an object.
        $this->s3Client->copyObject([
            'Bucket' => S3BUCKET,
            'Key' => $newPath,
            'CopySource' => S3BUCKET . "/" . $path,
        ]);
        $this->s3Client->waitUntil('ObjectExists', [
            'Bucket' => S3BUCKET,
            'Key' => $newPath,
        ]);
        if ($this->s3Client->doesBucketExist(S3BUCKET, $newPath)) {
            $result = $this->s3Client->deleteObject([
                'Bucket' => S3BUCKET,
                'Key' => $path,
            ]);

            return true;
        }

    }
}