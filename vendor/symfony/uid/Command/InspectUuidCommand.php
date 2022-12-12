<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Symfony\Component\Uid\Command;

use Symfony\Component\Console\Attribute\AsCommand;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Helper\TableSeparator;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\ConsoleOutputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Console\Style\SymfonyStyle;
<<<<<<< HEAD
=======
<<<<<<< HEAD
use Symfony\Component\Uid\Uuid;
use Symfony\Component\Uid\UuidV1;
use Symfony\Component\Uid\UuidV6;
=======
>>>>>>> 7e25601777803cff0484a0f03587d1acb226dcf0
use Symfony\Component\Uid\MaxUuid;
use Symfony\Component\Uid\NilUuid;
use Symfony\Component\Uid\TimeBasedUidInterface;
use Symfony\Component\Uid\Uuid;
<<<<<<< HEAD
=======
>>>>>>> e82a15adacdba22fb721425e4f15531d994b77b2
>>>>>>> 7e25601777803cff0484a0f03587d1acb226dcf0

#[AsCommand(name: 'uuid:inspect', description: 'Inspect a UUID')]
class InspectUuidCommand extends Command
{
<<<<<<< HEAD
=======
<<<<<<< HEAD
    /**
     * {@inheritdoc}
     */
=======
>>>>>>> e82a15adacdba22fb721425e4f15531d994b77b2
>>>>>>> 7e25601777803cff0484a0f03587d1acb226dcf0
    protected function configure(): void
    {
        $this
            ->setDefinition([
                new InputArgument('uuid', InputArgument::REQUIRED, 'The UUID to inspect'),
            ])
            ->setHelp(<<<'EOF'
The <info>%command.name%</info> displays information about a UUID.

    <info>php %command.full_name% a7613e0a-5986-11eb-a861-2bf05af69e52</info>
    <info>php %command.full_name% MfnmaUvvQ1h8B14vTwt6dX</info>
    <info>php %command.full_name% 57C4Z0MPC627NTGR9BY1DFD7JJ</info>
EOF
            )
        ;
    }

<<<<<<< HEAD
=======
<<<<<<< HEAD
    /**
     * {@inheritdoc}
     */
=======
>>>>>>> e82a15adacdba22fb721425e4f15531d994b77b2
>>>>>>> 7e25601777803cff0484a0f03587d1acb226dcf0
    protected function execute(InputInterface $input, OutputInterface $output): int
    {
        $io = new SymfonyStyle($input, $output instanceof ConsoleOutputInterface ? $output->getErrorOutput() : $output);

        try {
            /** @var Uuid $uuid */
            $uuid = Uuid::fromString($input->getArgument('uuid'));
        } catch (\InvalidArgumentException $e) {
            $io->error($e->getMessage());

            return 1;
        }

<<<<<<< HEAD
=======
<<<<<<< HEAD
        if (-1 === $version = uuid_type($uuid)) {
            $version = 'nil';
        } elseif (0 === $version || 2 === $version || 6 < $version) {
            $version = 'unknown';
=======
>>>>>>> 7e25601777803cff0484a0f03587d1acb226dcf0
        if (new NilUuid() == $uuid) {
            $version = 'nil';
        } elseif (new MaxUuid() == $uuid) {
            $version = 'max';
        } else {
            $version = uuid_type($uuid);
<<<<<<< HEAD
=======
>>>>>>> e82a15adacdba22fb721425e4f15531d994b77b2
>>>>>>> 7e25601777803cff0484a0f03587d1acb226dcf0
        }

        $rows = [
            ['Version', $version],
            ['toRfc4122 (canonical)', (string) $uuid],
            ['toBase58', $uuid->toBase58()],
            ['toBase32', $uuid->toBase32()],
<<<<<<< HEAD
=======
<<<<<<< HEAD
        ];

        if ($uuid instanceof UuidV1 || $uuid instanceof UuidV6) {
=======
>>>>>>> 7e25601777803cff0484a0f03587d1acb226dcf0
            ['toHex', $uuid->toHex()],
        ];

        if ($uuid instanceof TimeBasedUidInterface) {
<<<<<<< HEAD
=======
>>>>>>> e82a15adacdba22fb721425e4f15531d994b77b2
>>>>>>> 7e25601777803cff0484a0f03587d1acb226dcf0
            $rows[] = new TableSeparator();
            $rows[] = ['Time', $uuid->getDateTime()->format('Y-m-d H:i:s.u \U\T\C')];
        }

        $io->table(['Label', 'Value'], $rows);

        return 0;
    }
}
