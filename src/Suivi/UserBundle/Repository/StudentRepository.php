<?php
namespace Suivi\UserBundle\Repository;

use Doctrine\ORM\EntityRepository;

/**
 * Student Repository
 *
 * @author Jacob Delcroix <delcroix.jacob@gmail.com>
 */
class StudentRepository extends EntityRepository
{
	/**
	 * Get the list of all students and their complementary informations (professor, tutor, contract type)
	 *
	 * @return array
	 */
	public function getList()
	{
		$queryBuilder = $this
			->createQueryBuilder('student')
			->select('student, professor, tutor, contract_type')
			->leftJoin('student.professor', 'professor')
			->leftJoin('student.tutor', 'tutor')
			->leftJoin('student.contractType', 'contract_type');
		return $queryBuilder->getQuery()->getResult();
	}
}