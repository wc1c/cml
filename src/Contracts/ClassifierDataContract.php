<?php namespace Wc1c\Cml\Contracts;

/**
 * ClassifierDataContract
 *
 * @package Wc1c\Cml
 */
interface ClassifierDataContract extends DataContract
{
	/**
	 * @return string Unique id
	 */
	public function getId(): string;

	/**
	 * @return string Classifier name
	 */
	public function getName(): string;

	/**
	 * @return string Classifier description
	 */
	public function getDescription(): string;

	/**
	 * @return CounterpartyDataContract Classifier owner
	 */
	public function getOwner(): CounterpartyDataContract;

	/**
	 * @return array Classifier groups
	 */
	public function getGroups(): array;

	/**
	 * @return array Classifier categories
	 */
	public function getCategories(): array;

	/**
	 * @return array Classifier properties
	 */
	public function getProperties(): array;

	/**
	 * @return array Classifier price types
	 */
	public function getPriceTypes(): array;

	/**
	 * @return array Classifier units
	 */
	public function getUnits(): array;

    /**
     * @return array Classifier warehouses
     */
    public function getWarehouses(): array;

	/**
	 * Классификатор содержит только изменения, или нет.
	 *
	 * @return bool
	 */
	public function isOnlyChanges(): bool;

	/**
	 * Установка маркера наличия только изменений в классификаторе
	 *
	 * @param bool $only_changes
	 */
	public function setOnlyChanges(bool $only_changes);
}