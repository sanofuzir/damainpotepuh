<?php

namespace damainpotepuh\CoreBundle\Entity;

interface UserAware
{
    public function setUser(UserInterface $user = null);
}
