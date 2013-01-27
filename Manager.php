<?php
namespace Violin;
require_once("Service.php");
require_once("Entity/Victim.php");

class Manager {
	private $service;

	public function __construct($serviceBase) {
		$this->service = new Service($serviceBase);
	}

	public function createEntity($entity) {
		if ($entity instanceof Entity\Victim) {
			$this->service
					->postData("create",
							array('entity' => 'victim', 'id' => $entity->id,
									'firstName' => $entity->firstName,
									'lastName' => $entity->lastName,
									'birthDate' => $entity->birthDate));
		} else if ($entity instanceof Entity\Agressor) {
			$this->service
					->postData("create",
							array('entity' => 'agressor', 'id' => $entity->id,
									'firstName' => $entity->firstName,
									'lastName' => $entity->lastName,
									'birthDate' => $entity->birthDate));
		} else if ($entity instanceof Entity\ViolenceAct) {
			$this->service
					->postData("create",
							array('entity' => 'violenceAct'));
		} else if ($entity instanceof Entityt\PoliceReport) {
		} else if ($entity instanceof Entityt\SuspectReport) {

		} else if ($entity instanceof Entity\Denounce) {

		}
	}
}
