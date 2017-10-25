<?php

namespace BRMainBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use \Datetime;
use BRMainBundle\Entity\Users;

class LoadUsers implements FixtureInterface
{
	public function load(ObjectManager $manager) 
	{
		$users = array();
		$name = array('Rousseau', 'Sansone', 'Renouard');
		$firstName = array('Bill', 'Ludovic', 'Edwige');
		$nickName = array('Djabbic', 'Ludo83', 'edou');
		$birthDate = array(new DateTime('03/27/1986'), new DateTime('03/19/1984'), new DateTime('08/26/1985'));
		$phone = array('0648665915', '0663470287', '0615431939');
		$email = array('bill.rousseau@outlook.com', 'ludovic.sansone@me.com', 'edwige.renouard26@gmail.com');
		$password = array('+CvmA+e5', 'Xavierniel42', 'GwenAnaelle');
		$picture = array(null, null, null);
		$isVerified = array(true, false, false);
		$signupDate = array(new DateTime(), new DateTime('10/10/2017'), new DateTime());
		$city = array('Champigny-sur-Marne', 'Roquebrune-sur-Argens', 'Paris');
		$zipCode = array('94500', '83520', '75020');
		$lat = array(48.8164, 43.4683, 48.8707);
		$lng = array(2.4937, 6.6328, 2.3916);
		$description = array('Je suis Bill', 'Je suis Ludo', 'Je suis Edwige');
		$answerTime = array(1, 5, 37);
		$isOnline = array(true, true, false);
		$lastConnection = array(new DateTime('10/20/2017'), new DateTime('10/19/2017'), new DateTime('10/13/2017'));
		$update = array(new DateTime(), new DateTime(), new DateTime());
		$dbStatus = array(true, true, true);

		foreach ($name as $k => $v) {
			$users[] = new Users();
			$users[$k]->setName($v);
		}

		foreach ($firstName as $k => $v) {
			$users[$k]->setFirstName($v);
		}

		foreach ($nickName as $k => $v) {
			$users[$k]->setNickname($v);
		}

		foreach ($birthDate as $k => $v) {
			$users[$k]->setBirthDate($v);
		}

		foreach ($phone as $k => $v) {
			$users[$k]->setPhone($v);
		}

		foreach ($email as $k => $v) {
			$users[$k]->setEmail($v);
		}

		foreach ($password as $k => $v) {
			$users[$k]->setPassword($v);
		}

		foreach ($picture as $k => $v) {
			$users[$k]->setPicture($v);
		}

		foreach ($isVerified as $k => $v) {
			$users[$k]->setIsVerified($v);
		}

		foreach ($signupDate as $k => $v) {
			$users[$k]->setSignupDate($v);
		}

		foreach ($city as $k => $v) {
			$users[$k]->setCity($v);
		}

		foreach ($zipCode as $k => $v) {
			$users[$k]->setZipCode($v);
		}

		foreach ($lat as $k => $v) {
			$users[$k]->setLatitude($v);
		}

		foreach ($lng as $k => $v) {
			$users[$k]->setLongitude($v);
		}

		foreach ($description as $k => $v) {
			$users[$k]->setDescription($v);
		}

		foreach ($answerTime as $k => $v) {
			$users[$k]->setAnswerTime($v);
		}

		foreach ($isOnline as $k => $v) {
			$users[$k]->setIsOnline($v);
		}

		foreach ($lastConnection as $k => $v) {
			$users[$k]->setLastConnection($v);
		}

		foreach ($update as $k => $v) {
			$users[$k]->setUpdate($v);
		}

		foreach ($dbStatus as $k => $v) {
			$users[$k]->setDbStatus($v);
		}

		foreach ($users as $user) {
			$manager->persist($user);
		}
		$manager->flush();
	}
}