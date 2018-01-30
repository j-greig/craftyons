<?php
namespace Craft;

/**
 * Generated migration
 */
class m180105_171859_migration_field_contentBlocks_section_soundcloud_testimonials_global_footerColumn1_footerColumn2_headerInfo extends BaseMigration
{
    /**
    Migration manifest:
    
    FIELD
        - contentBlocks
        
    SECTION
        - soundcloud
        - testimonials
        
    GLOBAL
        - footerColumn1
        - footerColumn2
        - headerInfo
        
    */
	/**
	 * Any migration code in here is wrapped inside of a transaction.
	 * Returning false will rollback the migration
	 *
	 * @return bool
	 */
	public function safeUp()
	{
	    $json = '{"settings":{"dependencies":{"sections":[{"name":"SoundCloud","handle":"soundcloud","type":"channel","enableVersioning":"1","hasUrls":"0","template":null,"maxLevels":null,"locales":{"en_us":"1"},"entrytypes":[{"sectionHandle":"soundcloud","hasTitleField":"1","titleLabel":"Title","name":"SoundCloud","handle":"soundcloud","fieldLayout":{"Tab 1":["linkURL"]},"requiredFields":[]}]},{"name":"Testimonials","handle":"testimonials","type":"channel","enableVersioning":"1","hasUrls":"0","template":null,"maxLevels":null,"locales":{"en_us":"1"},"entrytypes":[{"sectionHandle":"testimonials","hasTitleField":"1","titleLabel":"Title","name":"Testimonials","handle":"testimonials","fieldLayout":{"Tab 1":["body","blockColour","blockWidth"]},"requiredFields":[]}]}]},"elements":{"fields":[{"group":"Content Block Options","name":"Content Blocks","handle":"contentBlocks","instructions":"","translatable":"0","required":false,"type":"Neo","typesettings":{"maxBlocks":"30"}}],"sections":[{"name":"SoundCloud","handle":"soundcloud","type":"channel","enableVersioning":"1","hasUrls":"0","template":null,"maxLevels":null,"locales":{"en_us":"1"},"entrytypes":[{"sectionHandle":"soundcloud","hasTitleField":"1","titleLabel":"Title","name":"SoundCloud","handle":"soundcloud","fieldLayout":{"Tab 1":["linkURL"]},"requiredFields":[]}]},{"name":"Testimonials","handle":"testimonials","type":"channel","enableVersioning":"1","hasUrls":"0","template":null,"maxLevels":null,"locales":{"en_us":"1"},"entrytypes":[{"sectionHandle":"testimonials","hasTitleField":"1","titleLabel":"Title","name":"Testimonials","handle":"testimonials","fieldLayout":{"Tab 1":["body","blockColour","blockWidth"]},"requiredFields":[]}]}],"globals":[{"name":"footerColumn1","handle":"footerColumn1","fieldLayout":{"Content":["body"]},"requiredFields":[]},{"name":"footerColumn2","handle":"footerColumn2","fieldLayout":{"Content":["plainText"]},"requiredFields":[]},{"name":"Header Info","handle":"headerInfo","fieldLayout":{"Content":["subheader"]},"requiredFields":[]}]}}}';
        return craft()->migrationManager_migrations->import($json);
    }

}
