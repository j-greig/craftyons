<?php
namespace Craft;

/**
 * Generated migration
 */
class m180105_173527_migration_global_footerColumn1_footerColumn2 extends BaseMigration
{
    /**
    Migration manifest:
    
    GLOBAL
        - footerColumn1
        - footerColumn2
        
    */
	/**
	 * Any migration code in here is wrapped inside of a transaction.
	 * Returning false will rollback the migration
	 *
	 * @return bool
	 */
	public function safeUp()
	{
	    $json = '{"settings":{"dependencies":[],"elements":{"globals":[{"name":"footerColumn1","handle":"footerColumn1","fieldLayout":{"Content":["body"]},"requiredFields":[]},{"name":"footerColumn2","handle":"footerColumn2","fieldLayout":{"Content":["plainText"]},"requiredFields":[]}]}}}';
        return craft()->migrationManager_migrations->import($json);
    }

}
