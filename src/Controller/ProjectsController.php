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

namespace Gashmob\Website\Controller;

use Archict\Router\RequestHandler;
use Gashmob\Website\Data\Project;
use Gashmob\Website\Services\Twig;
use Psr\Http\Message\ServerRequestInterface;

final readonly class ProjectsController implements RequestHandler
{
    public function __construct(private Twig $twig)
    {
    }

    public function handle(ServerRequestInterface $request): string
    {
        return $this->twig->render(
            'projects.html.twig',
            [
                'projects' => [
                    new Project(
                        'Fil',
                        'https://github.com/Fil-Language',
                        'https://raw.githubusercontent.com/Fil-Language/Arts/master/Fil.svg',
                        'Fil is a programmation language with the goal to be easy to use and not to verbose.',
                        ['language', 'compiler']
                    ),
                    new Project(
                        'Enquirer',
                        'https://github.com/Gashmob/Enquirer',
                        'https://opengraph.githubassets.com/28273d2245f99078a03d96527827474032cdf4c1e011812592fc963f6c26c4c9/Gashmob/Enquirer',
                        'A collection of function to make an interactive CLI. Inspired by Enquirer.js.',
                        ['library', 'c++', 'terminal'],
                    ),
                    new Project(
                        'Archict',
                        'https://github.com/Archict',
                        'https://avatars.githubusercontent.com/u/165313332?s=200&v=4',
                        'PHP framework to make api, websites and more. This website is made with it.',
                        ['framework', 'php'],
                    ),

                    new Project(
                        'See more',
                        'https://github.com/Gashmob',
                        'https://avatars.githubusercontent.com/u/54273056?v=4',
                        'Want to see more? Go on my GitHub profile.',
                        [],
                    )
                ]
            ]
        );
    }
}
