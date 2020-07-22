package com.jticketing.testCases;

import org.testng.annotations.Test;
import com.jticketing.pages.AComponentPage;
import com.jticketing.testbase.TestBase;

public class AComponentPageTest extends TestBase {
	
	@Test
	public void componentselection() {
		
		AComponentPage comp = new AComponentPage(driver);
		
		comp.component();
	}

}
