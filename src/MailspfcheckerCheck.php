<?php

namespace Lloricode\MailspfcheckerHealthCheck;

use Dietercoopman\Mailspfchecker\Mailspfchecker;
use Spatie\Health\Checks\Check;
use Spatie\Health\Checks\Result;
use Error;

class MailspfcheckerCheck extends Check
{
    private ?string $userServer = null;

    protected ?string $label = 'Mail SPF';

    private string $emailOrDomain = 'hello@example.com';

    public function run(): Result
    {
        $result = Result::make();

        try {
            $ok = $this->checker();
        } catch(Error $e) {
            return $result->failed('Error: '.$e->getMessage());
        }

        return $ok === true
            ? $result->ok()
            : $result->failed('Failed: '.$ok);
    }

    private function checker(): bool|string
    {
        $checker = app(Mailspfchecker::class);

        if ($this->userServer !== null) {
            $checker->using($this->userServer);
        }

        if ($checker->canISendAs($this->emailOrDomain)) {
            return true;
        }

        return $checker->howCanISendAs($this->emailOrDomain);
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
