<?php
declare(strict_types=1);

namespace App\Controller;
use Cake\Controller\Controller;
use Cake\Datasource\ConnectionManager;

class AdminDashboardController extends AppController
{


     public function index()
    {
		$connection = ConnectionManager::get('default');
			$statement2 = $connection->execute('SELECT count(*) as count from users');
				$statement3 = $connection->execute('SELECT count(*) as aktif from users where activated = 1');
					$statement4 = $connection->execute('SELECT count(*) as taktif from users where activated = 0');
						$statement5 = $connection->execute('SELECT count(*) as grup from groups');
							$statement6 = $connection->execute('SELECT count(*) as cr1 from pomparans where YEAR(created) = "2013"');
								$statement7 = $connection->execute('SELECT count(*) as cr2 from pomparans where YEAR(created) = "2014"');
									$statement8 = $connection->execute('SELECT count(*) as cr3 from pomparans where YEAR(created) = "2015"');
										$statement9 = $connection->execute('SELECT count(*) as cr4 from pomparans where YEAR(created) = "2016"');
											$statement10 = $connection->execute('SELECT count(*) as cr5 from pomparans where YEAR(created) = "2017"');
												$statement11 = $connection->execute('SELECT count(*) as cr6 from pomparans where YEAR(created) = "2018"');
													$statement12 = $connection->execute('SELECT count(*) as cr7 from pomparans where YEAR(created) = "2019"');
														$statement13 = $connection->execute('SELECT count(*) as cr8 from pomparans where YEAR(created) = "2020"');
     
        	$userCount = $statement2->fetch('assoc');
        		$statCount = $statement3->fetch('assoc');
				$stat2Count = $statement4->fetch('assoc');
					$groupCount = $statement5->fetch('assoc');
						$cr1Count = $statement6->fetch('assoc');
						$cr2Count = $statement7->fetch('assoc');
						$cr3Count = $statement8->fetch('assoc');
						$cr4Count = $statement9->fetch('assoc');
						$cr5Count = $statement10->fetch('assoc');
						$cr6Count = $statement11->fetch('assoc');
						$cr7Count = $statement12->fetch('assoc');
						$cr8Count = $statement13->fetch('assoc');
		$this->set(compact('userCount', 'statCount', 'stat2Count', 'groupCount','cr1Count','cr2Count','cr3Count','cr4Count','cr5Count','cr6Count','cr7Count','cr8Count'));
    }
}
