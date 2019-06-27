<?php


namespace Noir;


class StarController extends Controller
{
    /**
     * StarController constructor.
     * @param Site $site Site object
     * @param $user User object
     * @param array $post $_POST
     */
    public function __construct(Site $site, $user, $post) {
        parent::__construct($site);


        $this->result = json_encode(['ok' => true]);
    }

}