<?php declare(strict_types = 1);

namespace LSBProject\BlacklistBundle\Command;

use LSBProject\BlacklistBundle\Entity\BlacklistManagerInterface;
use Symfony\Component\Console\Attribute\AsCommand;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Console\Style\SymfonyStyle;

#[AsCommand('survos:blacklist:add', 'Add data to blacklisted')]
class AddToBlacklist extends Command
{
    public function __construct(private readonly BlacklistManagerInterface $blacklistManager)
    {
        parent::__construct();
    }

    protected function configure(): void
    {
        $this
            ->addArgument('type', InputArgument::REQUIRED, 'Blacklist type, e.g. "token"')
            ->addArgument('value', InputArgument::REQUIRED, 'Value to be blocked');
    }

    protected function execute(InputInterface $input, OutputInterface $output): int
    {
        /** @var string */
        $type = $input->getArgument('type');

        /** @var string */
        $value = $input->getArgument('value');

        $this->blacklistManager->addToBlacklist($value, $type);

        (new SymfonyStyle($input, $output))->success("Added $type $value");

        return self::SUCCESS;
    }
}
