<?php
/* copyright 2014, 2015 - FO-nTTaX
*
* script to create the wikicode of the detailed crosstables */
$numberofteams = 10;
echo '&lt;includeonly&gt;&lt;table class="wikitable crosstable"&gt;&lt;!--<br>';
for ($i = 1; $i <= $numberofteams; $i++) {
	echo '--&gt;{{#if:{{{team'.$i.'|}}}|&lt;tr class="crosstable-tr"&gt;&lt;!--'."<br>";
	echo '--&gt;&lt;th&gt;{{TeamIcon/{{{team'.$i.'}}}}}&lt;/th&gt;&lt;!--'."<br>";
	for ($j = 1; $j <= $numberofteams; $j++) {
		if ($i == $j) {
			echo '--&gt;&lt;td class="crosstable-bgc-cross"&gt;&lt;/td&gt;&lt;!--'."<br>";
		}
		if ($i < $j) {
			echo '--&gt;{{#if:{{{team'.$j.'|}}}|{{#if:{{{team'.$i.'vsteam'.$j.'result|}}}{{{team'.$i.'vsteam'.$j.'resultvs|}}}{{{team'.$i.'vsteam'.$j.'date|}}}|&lt;td class="crosstable-bgc-r{{{team'.$i.'vsteam'.$j.'result|}}}-r{{{team'.$i.'vsteam'.$j.'resultvs|}}}"&gt;\'\'\'{{{team'.$i.'vsteam'.$j.'result}}}-{{{team'.$i.'vsteam'.$j.'resultvs}}}\'\'\'{{#if:{{{team'.$i.'vsteam'.$j.'date|}}}|&lt;br&gt;{{#if:{{{team'.$i.'vsteam'.$j.'link|}}}|[[{{{team'.$i.'vsteam'.$j.'link}}}|{{#if:{{{team'.$i.'vsteam'.$j.'abbr|}}}|&lt;abbr title=&quot;{{{team'.$i.'vsteam'.$j.'abbr}}}&quot;&gt;&lt;small&gt;&lt;small&gt;{{{team'.$i.'vsteam'.$j.'date}}}&lt;/small&gt;&lt;/small&gt;&lt;/abbr&gt;|&lt;small&gt;&lt;small&gt;{{{team'.$i.'vsteam'.$j.'date}}}&lt;/small&gt;&lt;/small&gt;}}]]|{{#if:{{{team'.$i.'vsteam'.$j.'abbr|}}}|{{#if:{{{team'.$i.'vsteam'.$j.'abbr|}}}|&lt;abbr title=&quot;{{{team'.$i.'vsteam'.$j.'abbr}}}&quot;&gt;&lt;small&gt;&lt;small&gt;{{{team'.$i.'vsteam'.$j.'date}}}&lt;/small&gt;&lt;/small&gt;&lt;/abbr&gt;|&lt;small&gt;&lt;small&gt;{{{team'.$i.'vsteam'.$j.'date}}}&lt;/small&gt;&lt;/small&gt;}}|&lt;small>&lt;small&gt;{{{team'.$i.'vsteam'.$j.'date}}}&lt;/small&gt;&lt;/small&gt;}}}}}}&lt;/td&gt;|&lt;td&gt;&lt;/td&gt;}}}}&lt;!--<br>';
		}
		if ($i > $j) {
			echo '--&gt;{{#ifeq:{{{doublerounded}}}|true|{{#if:{{{team'.$i.'vsteam'.$j.'result|}}}{{{team'.$i.'vsteam'.$j.'resultvs|}}}{{{team'.$i.'vsteam'.$j.'date|}}}|&lt;td class="crosstable-bgc-r{{{team'.$i.'vsteam'.$j.'result|}}}-r{{{team'.$i.'vsteam'.$j.'resultvs|}}}"&gt;\'\'\'{{{team'.$i.'vsteam'.$j.'result}}}-{{{team'.$i.'vsteam'.$j.'resultvs}}}\'\'\'{{#if:{{{team'.$i.'vsteam'.$j.'date|}}}|&lt;br&gt;{{#if:{{{team'.$i.'vsteam'.$j.'link|}}}|[[{{{team'.$i.'vsteam'.$j.'link}}}|{{#if:{{{team'.$i.'vsteam'.$j.'abbr|}}}|&lt;abbr title=&quot;{{{team'.$i.'vsteam'.$j.'abbr}}}&quot;&gt;&lt;small&gt;&lt;small&gt;{{{team'.$i.'vsteam'.$j.'date}}}&lt;/small&gt;&lt;/small&gt;&lt;/abbr&gt;|&lt;small&gt;&lt;small&gt;{{{team'.$i.'vsteam'.$j.'date}}}&lt;/small&gt;&lt;/small&gt;}}]]|{{#if:{{{team'.$i.'vsteam'.$j.'abbr|}}}|&lt;abbr title=&quot;{{{team'.$i.'vsteam'.$j.'abbr}}}&quot;&gt;&lt;small&gt;&lt;small&gt;{{{team'.$i.'vsteam'.$j.'date}}}&lt;/small&gt;&lt;/small&gt;&lt;/abbr&gt;|&lt;small&gt;&lt;small&gt;{{{team'.$i.'vsteam'.$j.'date}}}&lt;/small&gt;&lt;/small&gt;}}}}}}&lt;/td&gt;|&lt;td&gt;&lt;/td&gt;}}|{{#if:{{{team'.$j.'vsteam'.$i.'result|}}}{{{team'.$j.'vsteam'.$i.'resultvs|}}}{{{team'.$j.'vsteam'.$i.'date|}}}|&lt;td class="crosstable-bgc-r{{{team'.$j.'vsteam'.$i.'resultvs|}}}-r{{{team'.$j.'vsteam'.$i.'result|}}}"&gt;\'\'\'{{{team'.$j.'vsteam'.$i.'resultvs}}}-{{{team'.$j.'vsteam'.$i.'result}}}\'\'\'{{#if:{{{team'.$j.'vsteam'.$i.'date|}}}|&lt;br&gt;{{#if:{{{team'.$j.'vsteam'.$i.'link|}}}|[[{{{team'.$j.'vsteam'.$i.'link}}}|{{#if:{{{team'.$j.'vsteam'.$i.'abbr|}}}|&lt;abbr title=&quot;{{{team'.$j.'vsteam'.$i.'abbr}}}&quot;&gt;&lt;small&gt;&lt;small&gt;{{{team'.$j.'vsteam'.$i.'date}}}&lt;/small&gt;&lt;/small&gt;&lt;/abbr&gt;|&lt;small&gt;&lt;small&gt;{{{team'.$j.'vsteam'.$i.'date}}}&lt;/small&gt;&lt;/small&gt;}}]]|{{#if:{{{team'.$j.'vsteam'.$i.'abbr|}}}|&lt;abbr title=&quot;{{{team'.$j.'vsteam'.$i.'abbr}}}&quot;&gt;&lt;small&gt;&lt;small&gt;{{{team'.$j.'vsteam'.$i.'date}}}&lt;/small&gt;&lt;/small&gt;&lt;/abbr&gt;|&lt;small&gt;&lt;small&gt;{{{team'.$j.'vsteam'.$i.'date}}}&lt;/small&gt;&lt;/small&gt;}}}}}}&lt;/td&gt;|&lt;td&gt;&lt;/td&gt;}}}}&lt;!--<br>';
		}
	}
	echo '--&gt;&lt;/tr&gt;}}&lt;!--'."<br>";
}
echo '--&gt;&lt;tr&gt;&lt;th&gt;&lt;/th&gt;&lt;!--<br>';
for ($i = 1; $i <= $numberofteams; $i++) {
	echo '--&gt;{{#if:{{{team'.$i.'|}}}|&lt;th&gt;{{TeamIcon/{{{team'.$i.'}}}}}&lt;/th&gt;}}&lt;!--<br>';
}
echo '--&gt;&lt;/tr&gt;&lt;!--<br>';
echo '--&gt;&lt;/table&gt;&lt;/includeonly&gt;&lt;noinclude&gt;{{documentation}}[[Category:Templates]]&lt;/noinclude&gt;';
?>
