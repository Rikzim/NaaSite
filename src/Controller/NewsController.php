<?php
    namespace App\Controller;

    class NewsController extends AppController
    {
        public function initialize(): void
        {
            parent::initialize();
            $this->loadComponent('Flash');
        }
        public function index()
        {
             // Use o modelo PostsTable
            $this->loadModel('News');

            // Encontre todos os registros ordenados por 'ID' em ordem crescente
            $news = $this->News->find('all', [
                'order' => ['id' => 'ASC']
            ]);

            // Passe os dados para a view
            $this->set('news', $news);
            
            $this->layout = false;
        }
        public function releases()
        {
            $this->set('news', $this->News->find('all'));
            $this->layout = false;
        }
        public function view($id = null)
        {
            $new = $this->News->get($id);
            $this->set(compact('new'));
        }
        public function add()
        {
            $new = $this->News
            ->newEmptyEntity();
            if ($this->request->is('post')) {
                $new = $this->News
                ->patchEntity($new, $this->request->getData());
                if ($this->News
                ->save($new)) {
                    $this->Flash->success(__('O seu artigo foi guardado.'));
                    return $this->redirect(['action' => 'index']);
                }
                $this->Flash->error(__.('Não é possível adicionar o seu artigo.'));
            }
            $this->set('new', $new);
        }
        public function edit($id = null)
        {
            $new = $this->News
            ->get($id);
            if ($this->request->is(['post', 'put'])) {
                $this->News
                ->patchEntity($new, $this->request->getData());
                if ($this->News
                ->save($new)) {
                    $this->Flash->success(__('Seu artigo foi atualizado.'));
                    return $this->redirect(['action' => 'index']);
                }
                $this->Flash->error(__('Seu artigo não pôde ser atualizado.'));
            }
            $this->set('new', $new);
        }

        public function delete($id)
        {
            $this->request->allowMethod(['post', 'delete']);
            $new = $this->News
            ->get($id);
            if ($this->News
            ->delete($new)) {
                $this->Flash->success(__('O artigo com id: {0} foi eliminado.', h($id)));
                return $this->redirect(['action' => 'index']);
            }
        }
    }
?>