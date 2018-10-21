<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\Worker;
use App\Form\WorkerType;

/**
 * @Route("/human-resources", name="human_resources")
 * @package App\Controller
 */
class HumanResourcesController extends AbstractController
{
    /**
     * Action to list all Workers
     *
     * This action uses Doctrine Entity Manager to list all Workers.
     * Can be used with pagination.
     *
     * @Route("/index", name="_index")
     *
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function index()
    {
    }

    /**
     * Show more about Worker
     *
     * This action uses built-in ParamConverter to find Worker, then
     * it displays more info about worker, like $name, $surname etc.
     *
     * @Route("/show/{id}", name="_show")
     *
     * @param Worker $worker
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function show(Worker $worker)
    {
    }

    /**
     * Create new Worker
     *
     * This action uses WorkerType to create new Worker.
     * Data is coming from Symfony Request.
     *
     * @Route("/create", name="_create")
     *
     * @param Request $request
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function create(Request $request)
    {
    }
}
