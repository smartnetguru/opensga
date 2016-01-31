<?php
App::uses('AppException', 'Lib/Exception');
App::uses('ErrorHandler', 'Error');

class AppErrorHandler extends ErrorHandler {

	public static function handleException(Exception $exception) {
		if ($exception instanceof AppException) {
			$element = 'default';
			$message = $exception->getMessage();
			$params = array('class' => 'error');
			CakeSession::write('Message.flash', compact('message', 'element', 'params'));
			if ($exception->hasRoute()) {
				$controller = self::_getController($exception);
				return $controller->redirect($exception->getRoute());
			}
		}

		return parent::handleException($exception);
	}

/**
 * Get the controller instance to handle the exception.
 * Override this method in subclasses to customize the controller used.
 * This method returns the built in `CakeErrorController` normally, or if an error is repeated
 * a bare controller will be used.
 *
 * @param Exception $exception The exception to get a controller for.
 * @return Controller
 */
	protected static function _getController($exception) {
		App::uses('CakeErrorController', 'Controller');
		if (!$request = Router::getRequest(true)) {
			$request = new CakeRequest();
		}
		$response = new CakeResponse(array('charset' => Configure::read('App.encoding')));
		try {
			if (class_exists('AppController')) {
				$controller = new CakeErrorController($request, $response);
			}
		} catch (Exception $e) {
		}
		if (empty($controller)) {
			$controller = new Controller($request, $response);
			$controller->viewPath = 'Errors';
		}
		return $controller;
	}

}
?>