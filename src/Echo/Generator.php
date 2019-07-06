<?php declare(strict_types=1);

namespace SOCi\Echo;

use SOCi\Graphqlc\Compiler\CodeGeneratorRequest;

class Generator {
	/**
	 * @var CodeGeneratorRequest
	 */
	private $request = null;

	public function __construct(CodeGeneratorRequest $request) {
		$this->request = $request;
	}


}
