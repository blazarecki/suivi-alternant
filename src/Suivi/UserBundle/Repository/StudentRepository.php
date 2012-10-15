<?php
namespace Suivi\UserBundle\Repository;

use Doctrine\ORM\EntityRepository;

class StudentRepository extends EntityRepository
{
	public function getList()
	{
		$queryBuilder = $this
			->createQueryBuilder('a')
			->leftJoin('a.professor', 'b')
			->addSelect('b')
			->leftJoin('a.tutor', 'c')
			->addSelect('c')
			->leftJoin('a.contractType', 'd')
			->addSelect('d');
		return $queryBuilder->getQuery()->getResult();
	}
}