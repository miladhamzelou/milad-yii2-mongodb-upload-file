# yii2-mongodb-upload-file

Yii2 file upload with database management

add component to your config

```php
'fileManager' => [
    'class'                    => \miladh\file\FileManager::className(),
    'alias'                    => \miladh\file\models\File::ALIAS_FRONTEND,
    'db'                       => 'db',
    'defaultImageThumbnail'    => '@frontend/web/images/thumb-image.jpg',
    'defaultDocumentThumbnail' => '@frontend/web/images/thumb-document.jpg',
    'defaultAudioThumbnail'    => '@frontend/web/images/thumb-audio.jpg',
    'defaultVideoThumbnail'    => '@frontend/web/images/thumb-video.jpg',
    'defaultOtherThumbnail'    => '@frontend/web/images/thumb-other.jpg',
]
```

do migration via console
```
php yii mongodb-migrate --migrationPath=@miladh/yii2-upload-file/src/migrations
```

getting fileManager
```php
/** @var FileManager $fileManager */
$fileManager = \Yii::$app->fileManager;
```

uploading file from fileInstance
```php
$fileInstance = UploadedFile::getInstanceByName('files');
/** @var miladh\file\models\File $file */
$file = $fileManager->upload($fileInstance);
```