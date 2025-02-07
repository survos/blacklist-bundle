<?php declare(strict_types = 1);

namespace LSBProject\BlacklistBundle\src\Command;

use LSBProject\BlacklistBundle\src\Entity\Blacklist;
use LSBProject\BlacklistBundle\src\Entity\BlacklistManagerInterface;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Console\Style\SymfonyStyle;

class ShowBlacklisted extends Command
{
    public function __construct(private readonly BlacklistManagerInterface $blacklistManager)
    {
        parent::__construct();
    }

    protected function configure(): void
    {
        $this->setName('lsbproject:blacklist:show')
            ->setDescription('Shows blacklisted')
            ->addArgument('type', InputArgument::OPTIONAL, 'Blacklist type, e.g. "email"');
    }

    protected function execute(InputInterface $input, OutputInterface $output): int
    {
        /** @var string|null $type */
        $type = $input->getArgument('type');

        $style = new SymfonyStyle($input, $output);

        $list = $this->blacklistManager->getList($type);

        if (!$list) {
            $style->success("No entries found");

            return;
        }

        $style->table(['type', 'value'], array_map(fn(Blacklist $blacklist) => [$blacklist->getType(), $blacklist->getValue()], $list));
    }
}
