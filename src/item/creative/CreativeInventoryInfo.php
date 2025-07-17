<?php

namespace customiesdevs\customies\item\creative;

use pocketmine\inventory\CreativeCategory;
use pocketmine\inventory\CreativeGroup;
use pocketmine\inventory\CreativeInventory;
use Symfony\Component\Filesystem\Path;

/**
 * Inspired from https://github.com/DavyCraft648/Customies-NG/blob/pm5/src/item/CreativeItemManager.php
 */
final class CreativeInventoryInfo {

    /** @var CreativeGroup[] $groups Both vanilla and custom creative groups. */
    public static array $groups = [];

	public function __construct(
        private readonly string $category = CreativeGroups::NONE,
        private readonly string $group = CreativeGroups::NONE
    ) { }

	/**
	 * Returns the category the item is part of.
	 */
	public function getCategory(): string {
		return $this->category;
	}

	/**
	 * Returns the numeric representation of the category the item is part of.
	 */
	public function getNumericCategory(): int {
		return match ($this->getCategory()) {
			CreativeCategories::CATEGORY_CONSTRUCTION => 1,
			CreativeCategories::CATEGORY_NATURE => 2,
			CreativeCategories::CATEGORY_EQUIPMENT => 3,
			CreativeCategories::CATEGORY_ITEMS => 4,
			default => 0
		};
	}

	/**
	 * Returns the group the item is part of, if any.
	 */
	public function getGroup(): string {
		return $this->group;
	}

    /**
     * Loads and stores all registered creative inventory groups.
     *
     * This method should be called **after** registering new groups to ensure that all available groups are correctly stored.
     */
    public static function loadGroups(): void {
        foreach (CreativeInventory::getInstance()->getAllEntries() as $entry) {
            $group = $entry->getGroup();
            if (!is_null($group)) self::$groups[$group->getName()->getText()] = $group;
        }
    }

    /**
     * Returns a default type which puts the item in to the all category and no subgroup.
     */
    public static function DEFAULT(): self {
        return new self(CreativeCategories::CATEGORY_ITEMS, CreativeGroups::NONE);
    }

    /**
     * Returns the string representation of the category the item is part of.
     */
    public static function getStringCategory(int $id): ?string {
        return match ($id) {
            1 => CreativeCategories::CATEGORY_CONSTRUCTION,
            2 => CreativeCategories::CATEGORY_NATURE,
            3 => CreativeCategories::CATEGORY_EQUIPMENT,
            4 => CreativeCategories::CATEGORY_ITEMS,
            default => null
        };
    }

    /**
     * Returns a PM creative category from Customies creative category, otherwise null.
     */
    public static function getPMCategory(string $oldCategory): ?CreativeCategory {
        return match ($oldCategory) {
            CreativeCategories::CATEGORY_CONSTRUCTION => CreativeCategory::CONSTRUCTION,
            CreativeCategories::CATEGORY_EQUIPMENT => CreativeCategory::EQUIPMENT,
            CreativeCategories::CATEGORY_NATURE => CreativeCategory::NATURE,
            CreativeCategories::CATEGORY_ITEMS => CreativeCategory::ITEMS,
            default => null
        };
    }

    /**
     * Returns a PM creative group from Customies creative group (or custom group's name), otherwise null.
     */
    public static function getPMGroup(string $category, string $oldGroup): ?CreativeGroup {
        if (empty(self::$groups)) self::loadGroups();
        if (isset(self::$groups[$oldGroup])) return self::$groups[$oldGroup];

        return null;
    }
}
