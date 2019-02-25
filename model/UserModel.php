<?php
namespace Model;

use Illuminate\Database\Eloquent\Model as Model;

/**
 * Description of UserModel
 *
 * @author Muhammad Cholis Malik
 */
class UserModel extends Model {
    protected $table = "users";
    protected $primaryKey = "UserID";
    protected $fillable = ['Name', 'Address', 'Status'];
    protected $dateFormat = 'Y-m-d H:i:s';
    // public $timestamps = false;
}
