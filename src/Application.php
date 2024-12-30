<?php
/**
 * MIT License
 *
 * Copyright (c) 2024-Present Kevin Traini
 *
 * Permission is hereby granted, free of charge, to any person obtaining a copy
 * of this software and associated documentation files (the "Software"), to deal
 * in the Software without restriction, including without limitation the rights
 * to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
 * copies of the Software, and to permit persons to whom the Software is
 * furnished to do so, subject to the following conditions:
 *
 * The above copyright notice and this permission notice shall be included in all
 * copies or substantial portions of the Software.
 *
 * THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
 * IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
 * FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
 * AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
 * LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
 * OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE
 * SOFTWARE.
 */

declare(strict_types=1);

namespace Gashmob\Website;

use Archict\Brick\ListeningEvent;
use Archict\Brick\Service;
use Archict\Router\Method;
use Archict\Router\RouteCollectorEvent;
use Gashmob\Website\Controller\CVController;
use Gashmob\Website\Controller\ExpertModeController;
use Gashmob\Website\Controller\HomeController;
use Gashmob\Website\Controller\ProjectsController;
use Gashmob\Website\Services\Twig;

#[Service]
final readonly class Application
{
    #[ListeningEvent]
    public function collectRoutes(RouteCollectorEvent $collector): void
    {
        $collector->addRoute(Method::GET, '', HomeController::class);
//        $collector->addRoute(Method::GET, '/cv', new CVController($this->twig));
        $collector->addRoute(Method::GET, '/projects', ProjectsController::class);
        $collector->addRoute(Method::GET, '/expert', ExpertModeController::class);
    }
}
