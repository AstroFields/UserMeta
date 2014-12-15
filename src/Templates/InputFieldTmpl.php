<?php

namespace WCM\AstroFields\UserMeta\Templates;

use WCM\AstroFields\Core;
use WCM\AstroFields\Standards;

class InputFieldTmpl extends Standards\Templates\InputFieldTmpl implements
	Core\Templates\TemplateInterface,
	Core\Templates\PrintableInterface
{
	/**
	 * @return string
	 */
	public function display()
	{
		return <<<EOF
<table class="form-table">
	<tbody>
		<tr>
			<th scope="row">
				<label for="{$this->data->getKey()}">Foo</label>
			</th>
			<td>{$this->getMarkUp()}</td>
		</tr>
	</tbody>
</table>
EOF;
	}
}