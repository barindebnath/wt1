<?xml version="1.0" encoding="UTF-8"?>
<xsl:stylesheet version="1.0" xmlns:xsl="http://www.w3.org/1999/XSL/Transform">
	<xsl:template match="/">
		<html>
			<body>
				<h2>Student</h2>
				<table border="1">
					<tr color="red">
						<th>ROLLNO</th>
						<th>FIRSTNAME</th>
						<th>LASTNAME</th>
					</tr>
					<xsl:for-each select="class/Student">
						<tr>
							<td><xsl:value-of select="@rollno"/></td>
							<td><xsl:value-of select="firstname"/></td>
							<td><xsl:value-of select="lastname"/></td>
						</tr>
					</xsl:for-each>
				</table>
			</body>
		</html>
	</xsl:template>
</xsl:stylesheet>
