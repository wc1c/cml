<?php namespace Wc1c\Cml\Entities;

defined('ABSPATH') || exit;

use Wc1c\Cml\Abstracts\DataAbstract;
use Wc1c\Cml\Contracts\CatalogDataContract;
use Wc1c\Cml\Contracts\CounterpartyDataContract;

/**
 * Catalog
 *
 * @package Wc1c\Cml
 */
class Catalog extends DataAbstract implements CatalogDataContract
{
	/**
	 * @return string
	 */
	public function getId(): string
	{
		return $this->data['id'];
	}

	/**
	 * @param string $id
	 */
	public function setId(string $id)
	{
		$this->data['id'] = $id;
	}

	/**
	 * @return string
	 */
	public function getClassifierId(): string
	{
		return $this->data['classifier_id'];
	}

	/**
	 * @param string $id
	 */
	public function setClassifierId(string $id)
	{
		$this->data['classifier_id'] = $id;
	}

	/**
	 * @return string
	 */
	public function getName(): string
	{
		return $this->data['name'];
	}

	/**
	 * @param string $name
	 */
	public function setName(string $name)
	{
		$this->data['name'] = $name;
	}

	/**
	 * @return string
	 */
	public function getDescription(): string
	{
		return $this->data['description'];
	}

	/**
	 * @param string $description
	 */
	public function setDescription(string $description)
	{
		$this->data['description'] = $description;
	}

	/**
	 * @return CounterpartyDataContract
	 */
	public function getOwner(): CounterpartyDataContract
	{
		return $this->data['owner'];
	}

	/**
	 * @param CounterpartyDataContract $owner
	 */
	public function setOwner(CounterpartyDataContract $owner)
	{
		$this->data['owner'] = $owner;
	}

	/**
	 * @return bool
	 */
	public function isOnlyChanges(): bool
	{
		return $this->data['only_changes'];
	}

	/**
	 * @param bool $only_changes
	 */
	public function setOnlyChanges(bool $only_changes)
	{
		$this->data['only_changes'] = $only_changes;
	}
}