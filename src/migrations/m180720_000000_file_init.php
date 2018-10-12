<?php

use yii\mongodb\Migration;


/**
 * Handles the creation of table `file`.
 */
class m180720_000000_file_init extends Migration
{
    /**
     * This method contains the logic to be executed when applying this migration.
     * @return bool return a false value to indicate the migration fails
     * and should not proceed further. All other return values mean the migration succeeds.
     */
    public function up()
    {
        // TODO: Implement up() method.
        $this->createCollection(\miladh\file\models\File::collectionName());

    }

    /**
     * This method contains the logic to be executed when removing this migration.
     * The default implementation throws an exception indicating the migration cannot be removed.
     * @return bool return a false value to indicate the migration fails
     * and should not proceed further. All other return values mean the migration succeeds.
     */
    public function down()
    {
        // TODO: Implement down() method.
        $this->dropCollection(\miladh\file\models\File::collectionName());

    }
}
