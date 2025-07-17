<?php
declare(strict_types=1);

namespace customiesdevs\customies\item\component;

use customiesdevs\customies\item\creative\CreativeInventoryInfo;

final class CreativeGroupComponent implements ItemComponent {

	public function __construct(
        public readonly CreativeInventoryInfo $creativeInfo
    ) {}

	public function getName(): string {
		return "creative_group";
	}

	public function getValue(): string {
		return $this->creativeInfo->getGroup();
	}

	public function isProperty(): bool {
		return true;
	}
}