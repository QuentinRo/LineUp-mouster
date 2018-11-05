<?php
/**
 * Created by PhpStorm.
 * User: Xavier
 * Date: 02.10.18
 * Time: 15:21
 */
require_once "sources/model/Database.php";
require_once "sources/model/iPersistable.php";
require_once "sources/model/Coordinate.php";
require_once "sources/model/Scene.php";
require_once "sources/model/Performance.php";
require_once "sources/model/Contract.php";
require_once "sources/model/VIPContract.php";
require_once "sources/model/StandardContract.php";


class Scene implements iPersistable
{
    private $name;
    private $localization;

    /**
     * Scene constructor.
     * @param $name
     * @param $localization
     */
    public function __construct($name, $localization)
    {
        $this->name = $name;
        $this->localization = $localization;
    }

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @return mixed
     */
    public function getLocalization()
    {
        return $this->localization;
    }


    /**
     * Load the object's members with the data of the database record with the given id
     * if the id member was set before the call, it is overwritten
     *
     * @param $id
     * @return void
     * @throws exception if the record wasn't found
     */
    public function load($id)
    {
        $pdo = Database::dbConnection();

        $stmt = $pdo->prepare('SELECT id, Name, Localisation FROM Scenes WHERE id=:id ');
        $stmt->execute(['id' => $id]);

        extract($stmt->fetch(PDO::FETCH_ASSOC)); // $id, $name,%localisation

        $this->id = $id;
        $this->name =$Name;
        $this->localization = $localisation;
    }

    /**
     * Load the object's members with the data of the database record with the id given by the id member
     *
     * @return void
     * @throws exception if the record wasn't found
     */
    public function reload()
    {
        // TODO: Implement reload() method.
    }

    /**
     * Creates record(s) in the db for the object state. The id member is updated with the value picked by the db
     *
     * @return void
     * @throws exception if the record wasn't created because of some db constraint violation
     */
    public function create()
    {
        // TODO: Implement create() method.
    }

    /**
     * Stores the state of the object in the db record(s)
     *
     * @return void
     * @throws exception if the record wasn't created because of some db constraint violation
     */
    public function store()
    {
        // TODO: Implement store() method.
    }

    /**
     * Deletes the db record(s)
     *
     * @return void
     * @throws exception if the record couldn't be deleted because of some db constraint violation
     */
    public function destroy()
    {
        // TODO: Implement destroy() method.
    }

    /**
     * Returns the list of all objects read from the database
     * @return mixed
     */
    public static function All()
    {
        // TODO: Implement All() method.
    }
}