<?xml version="1.0" encoding="utf-8"?>
<xsl:stylesheet version="1.0" xmlns:xsl="http://www.w3.org/1999/XSL/Transform">

  <xsl:template match="/">
    <html>
      <body>
        <h1>Boy Scouts of America</h1>
        <xsl:apply-templates select="bsa/council"/>
      </body>
    </html>
  </xsl:template>

  <xsl:template match="bsa/council">
    <h2>
      Council:
      <xsl:value-of select="@name"/>
    </h2>
    <xsl:apply-templates select="troop"/>
    <br/>
  </xsl:template>

  <xsl:template match="troop">
    <div class="troop">
      <h3>
        Troop #
        <xsl:value-of select="@troopNumber"/>
        &#160;
        <xsl:value-of select="@unitName"/>
      </h3>
      <div>
        <h4>Scouts</h4>
        <xsl:apply-templates select="scout"/>
      </div>
    </div>
  </xsl:template>

  <xsl:template match="scout">
    <div class="scout">
      <span>
        <xsl:value-of select="lastName/."/>,
        <xsl:value-of select="firstName/."/>
      </span>
      <br/>
      <span>
        <xsl:value-of select="address/street/."/>
        <br/>
        <xsl:value-of select="address/city/."/>,
        <xsl:value-of select="address/state/."/>
      </span>
      <br/>
      <span>
        <xsl:value-of select="phone/."/>
      </span>
      <br/>
      <span class="rank">
        <table class="rTable" border="1">
          <tr>
            <th>Rank</th>
            <th>Date Earned</th>
          </tr>
          <xsl:apply-templates select="rank"/>
        </table>
      </span>
      <br/>
      <span class="meritBadge">
        <table class="mbTable" border="1">
          <tr>
            <th>Merit Badge</th>
            <th>Date Earned</th>
          </tr>
          <xsl:apply-templates select="meritBadge"/>
        </table>
      </span>
    </div>
    <br/>
  </xsl:template>

  <xsl:template match="rank">
    <tr>
      <td>
        <xsl:value-of select="."/>
      </td>
      <td>
        <xsl:value-of select="@dateEarned"/>
      </td>
    </tr>
  </xsl:template>
  
  <xsl:template match="meritBadge">
    <tr>
      <td>
        <xsl:value-of select="."/>
      </td>
      <td>
        <xsl:value-of select="@dateEarned"/>
      </td>
    </tr>
  </xsl:template>

</xsl:stylesheet>
