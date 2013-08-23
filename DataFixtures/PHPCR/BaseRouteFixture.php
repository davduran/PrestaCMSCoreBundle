<?php
/**
 * This file is part of the Presta Bundle project.
 *
 * @author Nicolas Bastien <nbastien@prestaconcept.net>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace Presta\CMSCoreBundle\DataFixtures\PHPCR;

use Symfony\Cmf\Bundle\RoutingBundle\Doctrine\Phpcr\Route;

use Presta\CMSCoreBundle\Doctrine\Phpcr\Page;

/**
 * Base fixtures methods to easily create routes
 */
abstract class BaseRouteFixture extends BaseFixture
{
    /**
     * {@inheritdoc}
     */
    public function getOrder()
    {
        return 40;
    }
}
