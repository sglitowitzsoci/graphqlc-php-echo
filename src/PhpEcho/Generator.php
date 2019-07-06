<?php declare(strict_types=1);

namespace PhpEcho;

use Graphqlc\Compiler\CodeGeneratorRequest;
use Graphqlc\Compiler\CodeGeneratorResponse;
use Graphqlc\Compiler\CodeGeneratorResponse\File;

class Generator {
	/**
	 * @var CodeGeneratorRequest
	 */
	private $request = null;

	public function __construct(CodeGeneratorRequest $request) {
		$this->request = $request;
	}

	public function GenerateAllFiles(): CodeGeneratorResponse {
		$response = new CodeGeneratorResponse();

		$genFiles = [];
		$filesToGenerate = $this->request->getFileToGenerate();
		foreach ($filesToGenerate as $filename) {
			$genFiles[] = $filename;
		}

		$output = [];

		foreach ($this->request->getGraphqlFile() as $fd) {
			if (!in_array($fd->getName(), $genFiles)) {
				continue;
			}

			$outFd = new File();
			$outFd->setName($fd->getName().'.echo');
			$outFd->setContent('TEST TEST TEST\r\n');

			$output[] = $outFd;
		}

		return $response->setFile($output);
	}
}
