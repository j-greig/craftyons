<?php
namespace Craft;

/**
 * Generated migration
 */
class m180105_170653_migration_assetSource_amazonS3Legacy extends BaseMigration
{
    /**
    Migration manifest:
    
    ASSETSOURCE
        - amazonS3Legacy
        
    */
	/**
	 * Any migration code in here is wrapped inside of a transaction.
	 * Returning false will rollback the migration
	 *
	 * @return bool
	 */
	public function safeUp()
	{
	    $json = '{"settings":{"dependencies":{"assetSources":[{"name":"Amazon S3 Legacy","handle":"amazonS3Legacy","type":"S3","sortOrder":"2","typesettings":{"keyId":"AKIAJIAQEWZB3NVMML7Q","secret":"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","bucket":"graphicalhouse-collective","subfolder":"","publicURLs":"1","urlPrefix":"https://s3-eu-west-1.amazonaws.com/graphicalhouse-collective/","expires":"","location":"eu-west-1"}}]},"elements":{"assetSources":[{"name":"Amazon S3 Legacy","handle":"amazonS3Legacy","type":"S3","sortOrder":"2","typesettings":{"keyId":"AKIAJIAQEWZB3NVMML7Q","secret":"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","bucket":"graphicalhouse-collective","subfolder":"","publicURLs":"1","urlPrefix":"https://s3-eu-west-1.amazonaws.com/graphicalhouse-collective/","expires":"","location":"eu-west-1"},"fieldLayout":[]}]}}}';
        return craft()->migrationManager_migrations->import($json);
    }

}
