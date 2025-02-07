<?php declare(strict_types = 1);

namespace LSBProject\BlacklistBundle\src\Command;

use LSBProject\BlacklistBundle\src\Entity\BlacklistManagerInterface;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Console\Style\SymfonyStyle;

class AddToBlacklist extends Command
{
    /** @var BlacklistManagerInterface */
    private $blacklistManager;

    public function __construct(BlacklistManagerInterface $blacklistManager)
    {
        $this->blacklistManager = $blacklistManager;

        parent::__construct();
    }

    protected function configure(): void
    {
        $this->setName('lsbproject:blacklist:add')
            ->setDescription('Add row to blacklisted')
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

        (new SymfonyStyle($input, $output))->success("Added successfuly");

        return self::SUCCESS;
    }
}
