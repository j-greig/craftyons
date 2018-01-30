<?php
namespace Craft;

/**
 * Generated migration
 */
class m180127_135743_migration_section_programme extends BaseMigration
{
    /**
    Migration manifest:
    
    SECTION
        - programme
        
    */
	/**
	 * Any migration code in here is wrapped inside of a transaction.
	 * Returning false will rollback the migration
	 *
	 * @return bool
	 */
	public function safeUp()
	{
	    $json = '{"settings":{"dependencies":{"sections":[{"name":"What\u0027s On","handle":"programme","type":"channel","enableVersioning":"1","hasUrls":"1","template":"programme/_entry","maxLevels":null,"locales":{"en_gb":{"locale":"en_gb","urlFormat":"programme/{slug}","nestedUrlFormat":null,"enabledByDefault":"1"}},"entrytypes":[{"sectionHandle":"programme","hasTitleField":"1","titleLabel":"Title","name":"Programme Entry","handle":"Entry","fieldLayout":{"Content":["category","lightswitch","subheader","date","time","body","embeds","tags","media"]},"requiredFields":[]},{"sectionHandle":"programme","hasTitleField":"1","titleLabel":"Title","name":"Archive Programme Entry","handle":"old_programme_entry","fieldLayout":{"Tab 1":["category","date","time","body","embeds","media"]},"requiredFields":[]}]}]},"elements":{"sections":[{"name":"What\u0027s On","handle":"programme","type":"channel","enableVersioning":"1","hasUrls":"1","template":"programme/_entry","maxLevels":null,"locales":{"en_gb":{"locale":"en_gb","urlFormat":"programme/{slug}","nestedUrlFormat":null,"enabledByDefault":"1"}},"entrytypes":[{"sectionHandle":"programme","hasTitleField":"1","titleLabel":"Title","name":"Programme Entry","handle":"Entry","fieldLayout":{"Content":["category","lightswitch","subheader","date","time","body","embeds","tags","media"]},"requiredFields":[]},{"sectionHandle":"programme","hasTitleField":"1","titleLabel":"Title","name":"Archive Programme Entry","handle":"old_programme_entry","fieldLayout":{"Tab 1":["category","date","time","body","embeds","media"]},"requiredFields":[]}]}]}}}';
        return craft()->migrationManager_migrations->import($json);
    }

}
