<?php

/**
 * Navigation node
 *
 * @author Jan Marek
 * @license MIT
 */

namespace Navigation;

use Nette\ComponentContainer;


class NavigationNode extends ComponentContainer
{

	/** @var string */
	public $label;

	/** @var string */
	public $url;

	/** @var bool */
	public $isCurrent = false;



	/**
	 * Add navigation node as a child
	 * @staticvar int $counter
	 * @param string $label
	 * @param string $url
	 * @return NavigationNode
	 */
	public function add($label, $url) {
		$navigationNode = new self;
		$navigationNode->label = $label;
		$navigationNode->url = $url;

		static $counter;
		$this->addComponent($navigationNode, ++$counter);

		return $navigationNode;
	}



	/**
	 * Set node as current
	 * @param NavigationNode $node
	 */
	public function setCurrent(NavigationNode $node)
	{
		return $this->parent->setCurrent($node);
	}

}
