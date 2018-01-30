<?php
namespace Craft;

/**
 * Generated migration
 */
class m180127_120517_migration_category_events_exhibitions_projects_walks_learning_tours_offsite extends BaseMigration
{
    /**
    Migration manifest:
    
    CATEGORY
        - events
        - exhibitions
        - projects
        - walks
        - learning
        - tours
        - offsite
        
    */
	/**
	 * Any migration code in here is wrapped inside of a transaction.
	 * Returning false will rollback the migration
	 *
	 * @return bool
	 */
	public function safeUp()
	{
	    $json = '{"content":{"categories":[{"slug":"events","category":"programme","locales":{"en_gb":{"slug":"events","category":"programme","enabled":"1","locale":"en_gb","localeEnabled":"1","title":"Events","blockColour":["turquoise"]}}},{"slug":"exhibitions","category":"programme","locales":{"en_gb":{"slug":"exhibitions","category":"programme","enabled":"1","locale":"en_gb","localeEnabled":"1","title":"Exhibitions","blockColour":["light-orange"]}}},{"slug":"projects","category":"programme","locales":{"en_gb":{"slug":"projects","category":"programme","enabled":"1","locale":"en_gb","localeEnabled":"1","title":"Projects","blockColour":["pink"]}}},{"slug":"walks","category":"programme","locales":{"en_gb":{"slug":"walks","category":"programme","enabled":"1","locale":"en_gb","localeEnabled":"1","title":"Walks","blockColour":["light-pink"]}}},{"slug":"learning","category":"programme","locales":{"en_gb":{"slug":"learning","category":"programme","enabled":"1","locale":"en_gb","localeEnabled":"1","title":"Learning","blockColour":["light-blue"]}}},{"slug":"tours","category":"programme","locales":{"en_gb":{"slug":"tours","category":"programme","enabled":"1","locale":"en_gb","localeEnabled":"1","title":"Tours","blockColour":["light-grey"]}}},{"slug":"offsite","category":"programme","locales":{"en_gb":{"slug":"offsite","category":"programme","enabled":"1","locale":"en_gb","localeEnabled":"1","title":"Offsite","blockColour":["light-blue"]}}}]}}';
        return craft()->migrationManager_migrations->import($json);
    }

}
