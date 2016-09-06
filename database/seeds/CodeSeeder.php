<?php


use Illuminate\Database\Seeder;

abstract class CodeSeeder extends Seeder {
	protected $minCodeLength = 4;
	
	abstract protected function getSemester();
	
	protected function getSeedName() {
		return $this->getSemester() . '.json';
	}
	
	protected function prefilter($json) {
		krsort($json);
		return $json;
	}
	
	protected function toRows($modules, $split = 100) {
		$semester = $this->getSemester();
		
		return collect($modules)->map(function($courseId, $code) use ($semester) {
			return [
				'code' => $code,
				'course_id' => $courseId,
				'semester' => $semester,
			];
		})->chunk($split)->toArray();
	}
	
	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run() {
		$seedFilePath = __DIR__ . DIRECTORY_SEPARATOR . $this->getSeedName();
		$json = json_decode(file_get_contents($seedFilePath), true);
		$json = $this->prefilter($json);
		$modules = [];
		
		foreach ($json as $name => $courseId) {
			foreach (preg_split('/\s*\/\s*/', trim($name)) as $code) {
				if (strlen($code) < $this->minCodeLength) {
					continue;
				}
				
				if (array_key_exists(strtoupper($code), $modules) && trim($name) !== $code) {
					$this->command->warn("Duplicate module code $code in $name");
					continue;
				}
				
				$modules[strtoupper($code)] = $courseId;
			}
		}
		
		foreach ($this->toRows($modules) as $chunk) {
			app('db')->table('modules')->insert($chunk);
		}
	}
}