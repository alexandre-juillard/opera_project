<?php

namespace App\Security\Voter;

use Symfony\Component\Security\Core\Authentication\Token\TokenInterface;
use Symfony\Component\Security\Core\Authorization\Voter\Voter;
use Symfony\Component\Security\Core\User\UserInterface;

class isFirstConnexionVoter extends Voter
{
    public const ACCESS = 'IS_FIRST_CONNEXION';

    protected function supports(string $attribute, mixed $subject): bool
    {
        // replace with your own logic
        // https://symfony.com/doc/current/security/voters.html
        return in_array($attribute, [self::ACCESS])
            && $subject instanceof \App\Entity\Personal;
    }

    protected function voteOnAttribute(string $attribute, mixed $subject, TokenInterface $token): bool
    {
        $user = $token->getUser();

        // if the user is anonymous, do not grant access
        if (!$user instanceof UserInterface) {
            return false;
        }

        // ... (check conditions and return true to grant permission) ...
        switch ($attribute) {
            case self::ACCESS:
                // logic to determine if the user can EDIT
                // return true or false
                if ($user->getFirstConnexion()) { // si il y a une valeur dans le champs firstConnexion
                    return true;
                }
                break;
        }

        return false;
    }
}
