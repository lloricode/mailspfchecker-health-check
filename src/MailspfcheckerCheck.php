<?php

namespace Lloricode\MailspfcheckerHealthCheck;

use Dietercoopman\Mailspfchecker\Mailspfchecker;
use Spatie\Health\Checks\Check;
use Spatie\Health\Checks\Result;

class MailspfcheckerCheck extends Check
{
    private ?string $userServer = null;

    private string $emailOrDomain = 'info@dietse.dev';

    public function run(): Result
    {
        $result = Result::make();

        return $this->checker()
            ? $result->ok()
            : $result->failed('Failed');
    }

    public function checker(): bool
    {
        $checker = app(Mailspfchecker::class);

        if ($this->userServer !== null) {
            $checker->using($this->userServer);
        }

        $ok = $checker->canISendAs($this->emailOrDomain);

        if (! $ok) {
            $checker->howCanISendAs($this->emailOrDomain);
        }

        return $ok;
    }

    public function setUserServer(string $userServer): self
    {
        $this->userServer = $userServer;

        return $this;
    }

    public function setEmailOrDomain(string $emailOrDomain): self
    {
        $this->emailOrDomain = $emailOrDomain;

        return $this;
    }
}
