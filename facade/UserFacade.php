<?php
namespace Facade;

/**
 * Description of UserFacade
 *
 * @author Muhammad Cholis Malik
 */
use Slim\Http\Request as Request;
use Slim\Http\Response as Response;

use Illuminate\Database\Capsule\Manager as Manager;
use Model\UserModel as UserModel;

class UserFacade {
    public function getAll(Request $req, Response $res, $args) {
        $users = UserModel::all();
        if($users) {
            $res->withJson([
                "message" => 'success',
                "code" => 200,
                "data" => $users
            ]);
        } else {
            $res->withJson([
                "message" => 'not found',
                "code" => 404,
            ]);
        }
        return $res;
    }

    public function getById(Request $req, Response $res, $args) {
        extract($args);
        $user = UserModel::find($id);
        if($user) {
            $res->withJson([
                "message" => 'success',
                "code" => 200,
                "data" => $user
            ]);
        } else {
            $res->withJson([
                "message" => 'not found',
                "code" => 404
            ]);
        }
        return $res;
    }

    public function register(Request $req, Response $res, $args) {
        $post = $req->getParsedBody();
        $user = array(
            'Name' => $post['Name'],
            'Address' => $post['Address'],
            'Status' => $post['Status'],
        );
        $register = UserModel::create($user);
        if($register) {
            $res->withJson([
                "message" => 'success',
                "code" => 200,
                "data" => $user
            ]);
        } else {
            $res->withJson([
                "message" => 'unprocessable entity',
                "code" => 402,
            ]);
        }
        return $res;
    }

    public function update(Request $req, Response $res, $args) {
        extract($args);
        $post = $req->getParsedBody();
        $user = array(
            'Name' => $post['Name'],
            'Address' => $post['Address'],
            'Status' => $post['Status'],
        );
        $update = UserModel::where('UserID', $id)->update($user);
        if($update) {
            $res->withJson([
                "message" => 'success',
                "code" => 200,
                "data" => $user
            ]);
        } else {
            $res->withJson([
                "message" => 'unprocessable entity',
                "code" => 402,
            ]);
        }
        return $res;
    }

    public function delete(Request $req, Response $res, $args) {
        extract($args);
        $user = UserModel::find($id);
        $delete = $user->delete();
        if($delete) {
            $res->withJson([
                "message" => 'success',
                "code" => 200
            ]);
        } else {
            $res->withJson([
                "message" => 'unprocessable entity',
                "code" => 402,
            ]);
        }
    }
}