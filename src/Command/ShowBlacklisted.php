<?php declare(strict_types = 1);

namespace LSBProject\BlacklistBundle\Command;

use LSBProject\BlacklistBundle\Entity\Blacklist;
use LSBProject\BlacklistBundle\Entity\BlacklistManagerInterface;
use Symfony\Component\Console\Attribute\AsCommand;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Console\Style\SymfonyStyle;

#[AsCommand('survos:blacklist:show', 'List blacklisted entities')]
class ShowBlacklisted extends Command
{
    public function __construct(private readonly BlacklistManagerInterface $blacklistManager)
    {
        parent::__construct();
    }

    protected function configure(): void
    {
        $this
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

        }

        $style->table(['type', 'value'], array_map(fn(Blacklist $blacklist) => [$blacklist->getType(), $blacklist->getValue()], $list));

        return self::SUCCESS;
    }
}
