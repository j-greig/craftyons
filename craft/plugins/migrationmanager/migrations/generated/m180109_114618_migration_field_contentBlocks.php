<?php
namespace Craft;

/**
 * Generated migration
 */
class m180109_114618_migration_field_contentBlocks extends BaseMigration
{
    /**
    Migration manifest:
    
    FIELD
        - contentBlocks
        
    */
	/**
	 * Any migration code in here is wrapped inside of a transaction.
	 * Returning false will rollback the migration
	 *
	 * @return bool
	 */
	public function safeUp()
	{
	    $json = '{"settings":{"dependencies":[],"elements":{"fields":[{"group":"Content Block Options","name":"Content Blocks","handle":"contentBlocks","instructions":"","translatable":"0","required":false,"type":"Neo","typesettings":{"maxBlocks":"15"}}]}}}';
        return craft()->migrationManager_migrations->import($json);
    }

}
