<?php

namespace App\Controller;

use App\Controller\AppController;
use Cake\Event\Event;
use cake\ORM\TableRegistry;
use Cake\Datasource\ConnectionManager;




class ingenieursController extends AppController {

  public function index()
  {

      $this->render('/Espaces/ingenieurs/index');
  }
  public function viewActualites($id = null)
    {
    	$Actualites=TableRegistry::get('Actualites');
        $actualite = $Actualites->get($id, [
            'contain' => []
        ]);

        $this->set('actualite', $actualite);
        $this->set('_serialize', ['actualite']);
        $this->render('/Espaces/ingenieurs/viewActualites');
    }
  public function afficherActualites()
    {
    	$Actualites=TableRegistry::get('Actualites');
        $actualites = $this->paginate($Actualites);

        $this->set(compact('actualites'));
        $this->set('_serialize', ['actualites']);
        $this->render('/Espaces/ingenieurs/afficherActualites');
    }
  public function ajouterActualites()
    {
    	$Actualites=TableRegistry::get('Actualites');
        $actualite = $Actualites->newEntity();
        if ($this->request->is('post')) {
            $actualite = $Actualites->patchEntity($actualite, $this->request->data);
            if ($Actualites->save($actualite)) {
                $this->Flash->success(__('The {0} has been saved.', 'Actualite'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The {0} could not be saved. Please, try again.', 'Actualite'));
            }
        }
        $this->set(compact('actualite'));
        $this->set('_serialize', ['actualite']);
        $this->render('/Espaces/ingenieurs/ajouterActualites');
    }
    public function modifierActualites($id = null)
    {
    	$Actualites=TableRegistry::get('Actualites');
        $actualite = $Actualites->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $actualite = $Actualites->patchEntity($actualite, $this->request->data);
            if ($Actualites->save($actualite)) {
                $this->Flash->success(__('The {0} has been saved.', 'Actualite'));
                return $this->redirect(['action' => 'afficherActualites']);
            } else {
                $this->Flash->error(__('The {0} could not be saved. Please, try again.', 'Actualite'));
            }
        }
        $this->set(compact('actualite'));
        $this->set('_serialize', ['actualite']);
         $this->render('/Espaces/ingenieurs/modifierActualites');
    }
    public function supprimerActualites($id = null)
    {
    	$Actualites=TableRegistry::get('Actualites');
        $this->request->allowMethod(['post', 'delete']);
        $actualite = $Actualites->get($id);
        if ($Actualites->delete($actualite)) {
            $this->Flash->success(__('The {0} has been deleted.', 'Actualite'));
        } else {
            $this->Flash->error(__('The {0} could not be deleted. Please, try again.', 'Actualite'));
        }
        return $this->redirect(['action' => 'afficherActualites']);
        $this->render('/Espaces/ingenieurs/supprimerActualites');
    }

    public function afficherEvenements()
    {
    	 $Evenements=TableRegistry::get('Evenements');
        $evenements = $this->paginate($Evenements);

        $this->set(compact('evenements'));
        $this->set('_serialize', ['evenements']);

       
        $this->render('/Espaces/ingenieurs/afficherEvenements');
    }

     public function ajouterEvenements()
    {
    	$Evenements=TableRegistry::get('Evenements');
        $evenement = $Evenements->newEntity();
        if ($this->request->is('post')) {
            $evenement = $Evenements->patchEntity($evenement, $this->request->data);
            if ($Evenements->save($evenement)) {
                $this->Flash->success(__('The {0} has been saved.', 'Evenement'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The {0} could not be saved. Please, try again.', 'Evenement'));
            }
        }
        $this->set(compact('evenement'));
        $this->set('_serialize', ['evenement']);
        $this->render('/Espaces/ingenieurs/ajouterEvenements');
    }

     public function modifierEvenements($id = null)
    {
    	$Evenements=TableRegistry::get('Evenements');
        $evenement = $Evenements->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $evenement = $Evenements->patchEntity($evenement, $this->request->data);
            if ($Evenements->save($evenement)) {
                $this->Flash->success(__('The {0} has been saved.', 'Evenement'));
                return $this->redirect(['action' => 'afficherEvenements']);
            } else {
                $this->Flash->error(__('The {0} could not be saved. Please, try again.', 'Evenement'));
            }
        }
        $this->set(compact('evenement'));
        $this->set('_serialize', ['evenement']);
         $this->render('/Espaces/ingenieurs/modifierEvenements');
    }

     public function supprimerEvenements($id = null)
    {
    	$Evenements=TableRegistry::get('Evenements');
        $this->request->allowMethod(['post', 'delete']);
        $evenement = $Evenements->get($id);
        if ($Evenements->delete($evenement)) {
            $this->Flash->success(__('The {0} has been deleted.', 'Evenement'));
        } else {
            $this->Flash->error(__('The {0} could not be deleted. Please, try again.', 'Evenement'));
        }
        return $this->redirect(['action' => 'afficherEvenements']);
    }

    public function viewEvenements($id = null)
    {
    		$Evenements=TableRegistry::get('Evenements');
        $evenement = $Evenements->get($id, [
            'contain' => []
        ]);

        $this->set('evenement', $evenement);
        $this->set('_serialize', ['evenement']);
        $this->render('/Espaces/ingenieurs/viewEvenements');
    }


    /* VERSION 2 */ 
public function liste()
    {
        $this->render('/Espaces/ingenieurs/liste');
    }
        
    public function viewLaureats($id = null)
    {
        $Laureats=TableRegistry::get('Laureats');
        $laureat = $Laureats->get($id, [
            'contain' => []
        ]);

        $this->set('laureat', $laureat);
        $this->set('_serialize', ['laureat']);
        $this->render('/Espaces/ingenieurs/viewLaureats');
    }
       public function ajouterLaureats()
    {
        $Laureats=TableRegistry::get('Laureats');
        $laureat = $Laureats->newEntity();
        if ($this->request->is('post')) {
            $laureat = $Laureats->patchEntity($laureat, $this->request->data);
            if ($Laureats->save($laureat)) {
                $this->Flash->success(__('The {0} has been saved.', 'Laureat'));
                return $this->redirect(['action' => 'afficherLaureats']);
            } else {
                $this->Flash->error(__('The {0} could not be saved. Please, try again.', 'Laureat'));
            }
        }
        $this->set(compact('laureat'));
        $this->set('_serialize', ['laureat']);
        $this->render('/Espaces/ingenieurs/ajouterLaureats');

    }

      public function modifierLaureats($id = null)
    {
        $Laureats=TableRegistry::get('Laureats');
        $laureat = $Laureats->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $laureat = $Laureats->patchEntity($laureat, $this->request->data);
            if ($Laureats->save($laureat)) {
                $this->Flash->success(__('The {0} has been saved.', 'Laureat'));
                return $this->redirect(['action' => 'afficherLaureats']);
            } else {
                $this->Flash->error(__('The {0} could not be saved. Please, try again.', 'Laureat'));
            }
        }
        $this->set(compact('laureat'));
        $this->set('_serialize', ['laureat']);
         $this->render('/Espaces/ingenieurs/modifierLaureats');
    }
     public function supprimerLaureats($id = null)
    {
        $Laureats=TableRegistry::get('Laureats');
        $this->request->allowMethod(['post', 'delete']);
        $laureat = $Laureats->get($id);
        if ($Laureats->delete($laureat)) {
            $this->Flash->success(__('The {0} has been deleted.', 'Laureat'));
        } else {
            $this->Flash->error(__('The {0} could not be deleted. Please, try again.', 'Laureat'));
        }
        return $this->redirect(['action' => 'afficherLaureats']);
    }

     public function afficherLaureats()
    {
        $Laureats=TableRegistry::get('Laureats');
        $laureats = $this->paginate($Laureats);

        $this->set(compact('laureats'));
        $this->set('_serialize', ['laureats']);
        $this->render('/Espaces/ingenieurs/afficherLaureats');

    }


    public function ajouterActualiteClubs()
    {
        $Actualiteclubs=TableRegistry::get('Actualiteclubs');
        $actualiteclub = $Actualiteclubs->newEntity();
        if ($this->request->is('post')) {
            $actualiteclub = $Actualiteclubs->patchEntity($actualiteclub, $this->request->data);
            if ($Actualiteclubs->save($actualiteclub)) {
                $this->Flash->success(__('The {0} has been saved.', 'Actualiteclub'));
                return $this->redirect(['action' => 'ajouterActualiteClubs']);
            } else {
                $this->Flash->error(__('The {0} could not be saved. Please, try again.', 'Actualiteclub'));
            }
        }
        $this->set(compact('actualiteclub'));
        $this->set('_serialize', ['actualiteclub']);
        $this->render('/Espaces/ingenieurs/ajouterActualiteClubs');
    }
    public function afficherActualiteClubs()
    {   
        $Actualiteclubs=TableRegistry::get('Actualiteclubs');
        $actualiteclubs = $this->paginate($Actualiteclubs);

        $this->set(compact('actualiteclubs'));
        $this->set('_serialize', ['actualiteclubs']);
        $this->render('/Espaces/ingenieurs/afficherActualiteClubs');
    }
    public function viewActualiteClubs($id = null)
    {
        $Actualiteclubs=TableRegistry::get('Actualiteclubs');
        $actualiteclub = $Actualiteclubs->get($id, [
            'contain' => []
        ]);

        $this->set('actualiteclub', $actualiteclub);
        $this->set('_serialize', ['actualiteclub']);
        $this->render('/Espaces/ingenieurs/viewActualiteClubs');
    }
    public function modifierActualiteClubs($id = null)
    {
        $Actualiteclubs=TableRegistry::get('Actualiteclubs');
        $actualiteclub = $Actualiteclubs->get($id, ['contain' => []]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $actualiteclub = $Actualiteclubs->patchEntity($actualiteclub, $this->request->data);
            if ($Actualiteclubs->save($actualiteclub)) {
                $this->Flash->success(__('The {0} has been saved.', 'Actualiteclub'));
                return $this->redirect(['action' => 'afficherActualiteClubs']);
            } else {
                $this->Flash->error(__('The {0} could not be saved. Please, try again.', 'Actualiteclub'));
            }
        }
        $this->set(compact('actualiteclub'));
        $this->set('_serialize', ['actualiteclub']);
        $this->render('/Espaces/ingenieurs/modifierActualiteClubs');
    }
    public function supprimerActualiteClubs($id = null)
    {
        $Actualiteclubs=TableRegistry::get('Actualiteclubs');
        $this->request->allowMethod(['post', 'delete']);
        $actualiteclub = $Actualiteclubs->get($id);
        if ($Actualiteclubs->delete($actualiteclub)) {
            $this->Flash->success(__('The {0} has been deleted.', 'Actualiteclub'));
        } else {
            $this->Flash->error(__('The {0} could not be deleted. Please, try again.', 'Actualiteclub'));
        }
        return $this->redirect(['action' => 'afficherActualiteClubs']);
    }

    public function ajouterImages()
    {
        $Images=TableRegistry::get('Images');
        $image = $Images->newEntity();
        if ($this->request->is('post')) {
            $image = $Images->patchEntity($image, $this->request->data);
            if ($Images->save($image)) {
                $this->Flash->success(__('The {0} has been saved.', 'Image'));
                return $this->redirect(['action' => 'ajouterImages']);
            } else {
                $this->Flash->error(__('The {0} could not be saved. Please, try again.', 'Image'));
            }
        }
        $this->set(compact('image'));
        $this->set('_serialize', ['image']);
        $this->render('/Espaces/ingenieurs/ajouterImages');
    }
    public function afficherImages()
    {
        $Images=TableRegistry::get('Images');
        $images = $this->paginate($Images);

        $this->set(compact('images'));
        $this->set('_serialize', ['images']);
        $this->render('/Espaces/ingenieurs/afficherImages');
    }
    public function viewImages($id = null)
    {
        $Images=TableRegistry::get('Images');
        $image = $Images->get($id, [
            'contain' => []
        ]);

        $this->set('image', $image);
        $this->set('_serialize', ['image']);
        $this->render('/Espaces/ingenieurs/viewImages');
    }
    public function modifierImages($id = null)
    {
        $Images=TableRegistry::get('Images');
        $image = $Images->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $image = $Images->patchEntity($image, $this->request->data);
            if ($Images->save($image)) {
                $this->Flash->success(__('The {0} has been saved.', 'Image'));
                return $this->redirect(['action' => 'afficherImages']);
            } else {
                $this->Flash->error(__('The {0} could not be saved. Please, try again.', 'Image'));
            }
        }
        $this->set(compact('image'));
        $this->set('_serialize', ['image']);
        $this->render('/Espaces/ingenieurs/modifierImages');
    }
    public function supprimerImages($id = null)
    {
        $Images=TableRegistry::get('Images');
        $this->request->allowMethod(['post', 'delete']);
        $image = $Images->get($id);
        if ($Images->delete($image)) {
            $this->Flash->success(__('The {0} has been deleted.', 'Image'));
        } else {
            $this->Flash->error(__('The {0} could not be deleted. Please, try again.', 'Image'));
        }
        return $this->redirect(['action' => 'afficherImages']);
    }

    public function ajouterVideos()
    {
        $Videos=TableRegistry::get('Videos');
        $video = $Videos->newEntity();
        if ($this->request->is('post')) {
            $video = $Videos->patchEntity($video, $this->request->data);
            if ($Videos->save($video)) {
                $this->Flash->success(__('The {0} has been saved.', 'Video'));
                return $this->redirect(['action' => 'ajouterVideos']);
            } else {
                $this->Flash->error(__('The {0} could not be saved. Please, try again.', 'Video'));
            }
        }
        $this->set(compact('video'));
        $this->set('_serialize', ['video']);
        $this->render('/Espaces/ingenieurs/ajouterVideos');
    }
    public function afficherVideos()
    {
        $Videos=TableRegistry::get('Videos');
        $videos = $this->paginate($Videos);

        $this->set(compact('videos'));
        $this->set('_serialize', ['videos']);
        $this->render('/Espaces/ingenieurs/afficherVideos');
    }
    public function viewVideos($id = null)
    {
        $Videos=TableRegistry::get('Videos');
        $video = $Videos->get($id, ['contain' => []]);

        $this->set('video', $video);
        $this->set('_serialize', ['video']);
        $this->render('/Espaces/ingenieurs/viewVideos');
    }
    public function modifierVideos($id = null)
    {
        $Videos=TableRegistry::get('Videos');
        $video = $Videos->get($id, ['contain' => []]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $video = $Videos->patchEntity($video, $this->request->data);
            if ($Videos->save($video)) {
                $this->Flash->success(__('The {0} has been saved.', 'Video'));
                return $this->redirect(['action' => 'afficherVideos']);
            } else {
                $this->Flash->error(__('The {0} could not be saved. Please, try again.', 'Video'));
            }
        }
        $this->set(compact('video'));
        $this->set('_serialize', ['video']);
        $this->render('/Espaces/ingenieurs/modifierVideos');
    }
    public function supprimerVideos($id = null)
    {
        $Videos=TableRegistry::get('Videos');
        $this->request->allowMethod(['post', 'delete']);
        $video = $Videos->get($id);
        if ($Videos->delete($video)) {
            $this->Flash->success(__('The {0} has been deleted.', 'Video'));
        } else {
            $this->Flash->error(__('The {0} could not be deleted. Please, try again.', 'Video'));
        }
        return $this->redirect(['action' => 'afficherVideos']);
    }

    public function ajouterClubs()
    {
        $Clubs=TableRegistry::get('Clubs');
        $club = $Clubs->newEntity();
        if ($this->request->is('post')) {
            $club = $Clubs->patchEntity($club, $this->request->data);
            if ($Clubs->save($club)) {
                $this->Flash->success(__('The {0} has been saved.', 'Club'));
                return $this->redirect(['action' => 'ajouterClubs']);
            } else {
                $this->Flash->error(__('The {0} could not be saved. Please, try again.', 'Club'));
            }
        }
        $this->set(compact('club'));
        $this->set('_serialize', ['club']);
        $this->render('/Espaces/ingenieurs/ajouterClubs');
    }
    public function afficherClubs()
    {
        $Clubs=TableRegistry::get('Clubs');
        $clubs = $this->paginate($Clubs);

        $this->set(compact('clubs'));
        $this->set('_serialize', ['clubs']);
        $this->render('/Espaces/ingenieurs/afficherClubs');
    }
    public function viewClubs($id = null)
    {
        $Clubs=TableRegistry::get('Clubs');
        $club = $Clubs->get($id, ['contain' => []]);

        $this->set('club', $club);
        $this->set('_serialize', ['club']);
        $this->render('/Espaces/ingenieurs/viewClubs');
    }
    public function modifierClubs($id = null)
    {
        $Clubs=TableRegistry::get('Clubs');
        $club = $Clubs->get($id, ['contain' => []]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $club = $Clubs->patchEntity($club, $this->request->data);
            if ($Clubs->save($club)) {
                $this->Flash->success(__('The {0} has been saved.', 'Club'));
                return $this->redirect(['action' => 'afficherClubs']);
            } else {
                $this->Flash->error(__('The {0} could not be saved. Please, try again.', 'Club'));
            }
        }
        $this->set(compact('club'));
        $this->set('_serialize', ['club']);
        $this->render('/Espaces/ingenieurs/modifierClubs');
    }
    public function supprimerClubs($id = null)
    {
        $Clubs=TableRegistry::get('Clubs');
        $this->request->allowMethod(['post', 'delete']);
        $club = $Clubs->get($id);
        if ($Clubs->delete($club)) {
            $this->Flash->success(__('The {0} has been deleted.', 'Club'));
        } else {
            $this->Flash->error(__('The {0} could not be deleted. Please, try again.', 'Club'));
        }
        return $this->redirect(['action' => 'afficherClubs']);
    }

    public function beforeFilter(Event $event)
    {
        // allow only login, forgotpassword
        $this->Auth->authorize = 'controller';
        $usrole = $this->Auth->user('role');
        if($usrole!='ingenieur' && $usrole!='admin')
        {

            $this->Flash->error(__('Vous ne pouvez pas acceder a ce lien'));
            return $this->redirect(
                ['controller' => 'Users', 'action' => 'logout']
            );
        }
        $this->Auth->deny();

    }

}


?>
