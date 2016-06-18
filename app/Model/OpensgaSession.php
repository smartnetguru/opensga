<?php
App::uses('AppModel', 'Model');
/**
 * OpensgaSessiom Model
 *
 */

App::uses('AuthComponent', 'Controller/Component');

class OpensgaSession extends AppModel
{
    public $actsAs = ['Containable'];

    // Add the relation between the User and the UserSession
    public $belongsTo = ['User'];

    // Time in seconds before a session no longer should be seen as active
    private $_activeSessionThreshold = 600;

    /**
     * Before Save callback
     * used to add the User's ID to session data (if any, otherwise null is used)
     *
     * @param array $options The options passed to the save method
     *
     * @return bool
     */
    public function beforeSave($options = [])
    {
        $this->data[$this->alias]['user_id'] = AuthComponent::user('id');

        return true;
    }

    /**
     * Expire every session except the current one
     *
     * @return bool
     */
    public function expireAllExceptCurrent()
    {
        if (!AuthComponent::user('id')) {
            return false;
        }

        $query = [
            'UserSession.id <>' => session_id(),
            'UserSession.user_id' => AuthComponent::user('id'),
        ];

        return $this->deleteAll($query);
    }

    /**
     * Find all the sessions that are considered active
     *
     * @return array
     */
    public function findActive()
    {
        $query = [
            'recursive' => -1,
            'contain' => [
                'User' => [
                    'fields' => [
                        'User.id',
                        'User.email',
                    ],
                ],
            ],
            'conditions' => [
                'expires >=' => time() - $this->_activeSessionThreshold,
            ],
            'fields' => [
                'UserSession.id',
            ],
        ];

        return $this->find('all', $query);
    }
}
