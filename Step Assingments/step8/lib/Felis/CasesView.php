<?php


namespace Felis;


class CasesView extends View
{
    public function __construct()
    {
        $this->setTitle("Cases");
    }

    public function presentBody(){
        $html = <<< HTML
<form class="table" action="post/cases.php" method="post">
	<p>
	<input type="submit" name="add" id="add" value="Add">
	<input type="submit" name="delete" id="delete" value="Delete">
	</p>

	<table>
		<tr>
			<th>&nbsp;</th>
			<th>Case Number</th>
			<th>Client</th>
			<th>Agent In Charge</th>
			<th class="desc">Description</th>
			<th>Most Recent Report</th>
			<th>Status</th>
		</tr>

		<tr>
			<td><input type="radio" name="id"></td>
			<td><a href="case.php">16-0088</a></td>
			<td>Swift, Taylor</td>
			<td>Bogart, Humphrey</td>
			<td class="desc"><div>Tabby sneaking around her place.</div></td>
			<td>2-16-2016 11:32pm</td>
			<td>Open</td>
		</tr>
		<tr>
			<td><input type="radio" name="id"></td>
			<td><a href="case.php">16-0172</a></td>
			<td>Trump, Donald</td>
			<td>Martin, Harvey</td>
			<td class="desc"><div>Garbage cans regularly knocked over.</div></td>
			<td>2-12-2016 1:19am</td>
			<td>Open</td>
		</tr>

		<tr>
			<td><input type="radio" name="id"></td>
			<td><a href="case.php">16-0218</a></td>
			<td>Diamond, Olivia</td>
			<td>Martin, Harvey</td>
			<td class="desc"><div>Macavity stole her tuna caserole.</div></td>
			<td>1-12-2015 3:33am</td>
			<td>Closed</td>
		</tr>
	</table>
</form>
HTML;

        return $html;

    }
}