package com.jticketing.pages;

import org.openqa.selenium.WebDriver;
import org.openqa.selenium.WebElement;
import org.openqa.selenium.support.FindBy;
import org.openqa.selenium.support.How;
import org.openqa.selenium.support.PageFactory;
import org.openqa.selenium.support.ui.ExpectedConditions;
import org.openqa.selenium.support.ui.WebDriverWait;

import com.jticketing.testbase.TestBase;

public class CreateEventPage extends TestBase {

	public WebDriver driver;

	public CreateEventPage(WebDriver driver) {

		this.driver = driver;

		PageFactory.initElements(driver, this);
	}

	/*
	 * Locators for Create Event
	 */
	
	@FindBy(how = How.XPATH, using = "//*[@id=\"submenu\"]/li[4]/a")
	public WebElement Events;

	@FindBy(how = How.XPATH, using = "//*[@id=\"toolbar-new\"]/button")
	public WebElement NewEvent;
	
	//@FindBy(how = How.XPATH, using = "//*[@id=\"myTabTabs\"]/li[1]/a")
	//public WebElement EventDetails;
	
	@FindBy(how = How.XPATH, using = "//a[contains(text(),'Event Details')]")
	public WebElement EventDetails;
	
	//Basic Info tab
	@FindBy(how = How.ID, using = "jform_title")
	public WebElement Title;
	
	@FindBy(how = How.ID, using = "jform_startdate")
	public WebElement EventStartDate;
	
	@FindBy(how = How.ID, using = "jform_enddate")
	public WebElement EventEndDate;

	@FindBy(how = How.XPATH, using = "//*[@id=\"collapse1\"]/div/div/div[1]/div[4]/div[2]/div/div/button")
	public WebElement Creator; 
	
	@FindBy(how = How.XPATH, using = "//*[@id=\"userModal_jform_created_by\"]/div[2]/iframe")
	public WebElement CreatorIFrame;
	
	@FindBy(how = How.XPATH, using = "//*[@id=\"adminForm\"]/table/tbody/tr[1]/td[1]/a")
	public WebElement FirstCreator;
	
	@FindBy(how = How.XPATH, using = "//*[@id=\"adminForm\"]/table/tbody/tr[2]/td[1]/a")
	public WebElement SecondCreator;
	
	@FindBy(how = How.XPATH, using = "//*[@id=\"jform_online_events\"]/label[1]")
	public WebElement OnlineVenueYes;

	@FindBy(how = How.XPATH, using = "//*[@id=\"jform_online_events\"]/label[2]")
	public WebElement OnlineVenueNo;
	
	@FindBy(how = How.XPATH, using = "//*[@id=\"jform_venue_chzn\"]/a/div/b")
	public WebElement EventVenue;
	
	@FindBy(how = How.XPATH, using = "/html/body/div[2]/section/div/div/form/div/div/div/div[1]/div[1]/div/div[1]/div[2]/div/div/div[2]/div[5]/div[2]/div[1]/div/ul/li[8]")
	public WebElement EventVenueCustomLocation;
	
	@FindBy(how = How.XPATH, using = "/html/body/div[2]/section/div/div/form/div/div/div/div[1]/div[1]/div/div[1]/div[2]/div/div/div[2]/div[4]/div[2]/div[1]/div/ul/li[2]")
    public WebElement SecondEventVenue;
	
	@FindBy(how = How.XPATH, using = "//*[@id=\"jform_catid_chzn\"]")
    public WebElement SelectEventCategory;
	
	@FindBy(how = How.XPATH, using = "/html/body/div[2]/section/div/div/form/div/div/div/div[1]/div[1]/div/div[1]/div[2]/div/div/div[1]/div[5]/div[2]/div/div/ul/li[1]")
    public WebElement FirstEventCategory;
	
	@FindBy(how = How.XPATH, using = "/html/body/div[2]/section/div/div/form/div/div/div/div[1]/div[1]/div/div[1]/div[2]/div/div/div[1]/div[5]/div[2]/div/div/ul/li[2]")
    public WebElement SecondEventCategory;
	
	@FindBy(how = How.ID, using = "jform_location")
	public WebElement Eventlocation;
	
	@FindBy(how = How.XPATH, using = "//*[@id=\"jform_state\"]/label[1]")
	public WebElement PublishEvent;
	
	@FindBy(how = How.XPATH, using = "//*[@id=\"jform_state\"]/label[2]")
	public WebElement UnpublishEvent;
	
	@FindBy(how = How.XPATH, using = "//*[@id=\"jform_allow_view_attendee\"]/label[1]")
	public WebElement EnableSeeEventAttendee;
	
	@FindBy(how = How.XPATH, using = "//*[@id=\"jform_allow_view_attendee\"]/label[2]")
	public WebElement DisableSeeEventAttendee;
	
	@FindBy(how = How.XPATH, using = "/html/body/div[2]/section/div/div/form/div/div/div/div[1]/div[1]/div/div[1]/div[2]/div/div/div[1]/div[9]/div[2]/div/a/div/b")
	public WebElement SelectAccess;
	
	@FindBy(how = How.XPATH, using = "/html/body/div[2]/section/div/div/form/div/div/div/div[1]/div[1]/div/div[1]/div[2]/div/div/div[1]/div[9]/div[2]/div/div/ul/li[1]")
	public WebElement AccessPublic;
	
	@FindBy(how = How.XPATH, using = "/html/body/div[2]/section/div/div/form/div/div/div/div[1]/div[1]/div/div[1]/div[2]/div/div/div[1]/div[9]/div[2]/div/div/ul/li[2]")
	public WebElement AccessGuest;
	
	@FindBy(how = How.XPATH, using = "/html/body/div[2]/section/div/div/form/div/div/div/div[1]/div[1]/div/div[1]/div[2]/div/div/div[1]/div[9]/div[2]/div/div/ul/li[3]")
	public WebElement AccessRegistered;
	
	@FindBy(how = How.XPATH, using = "//*[@id=\"jform_access_chzn\"]/a/div/b")
	public WebElement AcceptPrivacyTerm;

	//Detail Info Tab

	@FindBy(how = How.LINK_TEXT, using = "Detail Information")
	public WebElement DetailInfo;

	@FindBy(how = How.XPATH, using = "//*[@id=\"jform_image\"]")
	public WebElement ChooseEventImage;
	
	@FindBy(how = How.ID, using = "jform_long_description_ifr")
	public WebElement EventDescription;
	
	@FindBy(how = How.XPATH, using = "//*[@id=\"jform_meta_data\"]")
	public WebElement MetaKeyword;
	
	@FindBy(how = How.XPATH, using = "//*[@id=\"jform_meta_desc\"]")
	public WebElement MetaDescription;
	
	@FindBy(how = How.XPATH, using = "//*[@id=\"jform_certificate_template_chzn\"]/a/div/b")
	public WebElement SelectCertificateTemplate;
	
	@FindBy(how = How.XPATH, using = "/html/body/div[2]/section/div/div/form/div/div/div/div[1]/div[1]/div/div[2]/div[2]/div/div/div[2]/div[2]/div[2]/div/div/ul/li[3]")
	public WebElement FirstCertificateTemplate;
	
	@FindBy(how = How.XPATH, using = "/html/body/div[2]/section/div/div/form/div/div/div/div[1]/div[1]/div/div[2]/div[2]/div/div/div[2]/div[2]/div[2]/div/div/ul/li[4]")
	public WebElement SecondCertificateTemplate;
	
	@FindBy(how = How.XPATH, using = "//*[@id=\"jform_certificate_expiry\"]")
	public WebElement CertificateExpiry;
	
	//Booking timing and other info tab
	
	@FindBy(how = How.XPATH, using = "//*[@id=\"myAccordian\"]/div[3]/div[1]/strong/a")
	public WebElement BookingTimingandOtherInfo;
	
	@FindBy(how = How.XPATH, using = "//*[@id=\"jform_booking_start_date\"]")
	public WebElement BookingStartDate;
	
	@FindBy(how = How.XPATH, using = "//*[@id=\"jform_booking_end_date\"]")
	public WebElement BookingEndDate;
	
	@FindBy(how = How.XPATH, using = "//*[@id=\"jform_ideal_time\"]")
	public WebElement IdealTime;
	
	//Ticket Types

	@FindBy(how = How.LINK_TEXT, using = "Ticket Types")
	public WebElement TicketTypes;

	@FindBy(how = How.XPATH, using = "//*[@id=\"tickettypes\"]/div/div/div/div[1]/div/a")
	public WebElement AddTicket;

	@FindBy(how = How.XPATH, using = "//*[@id=\"jform_tickettypes__tickettypes0__title\"]")
	public WebElement FirstTicketTitle;
	
	@FindBy(how = How.XPATH, using = "//*[@id=\"jform_tickettypes__tickettypes1__title\"]")
	public WebElement SecondTicketTitle;
	
	@FindBy(how = How.XPATH, using = "//*[@id=\"jform_tickettypes__tickettypes0__desc\"]")
	public WebElement FirstTicketDescription;
	
	@FindBy(how = How.XPATH, using = "//*[@id=\"jform_tickettypes__tickettypes1__desc\"]")
	public WebElement SecondTicketDescription;
	
	@FindBy(how = How.XPATH, using = "//*[@id=\"jform_tickettypes__tickettypes0__state_chzn\"]/a/div/b")
	public WebElement FirstTicketStatus;
	
	@FindBy(how = How.XPATH, using = "//*[@id=\"jform_tickettypes__tickettypes1__state_chzn\"]/a/div/b")
	public WebElement SecondTicketStatus;
	
	@FindBy(how = How.XPATH, using = "/html/body/div[2]/section/div/div/form/div/div/div/div[1]/div[2]/div/div/div/div[2]/div[4]/div[2]/div/div/ul/li[1]")
	public WebElement FirstTicketStatusPublish;
	
	@FindBy(how = How.XPATH, using = "/html/body/div[2]/section/div/div/form/div/div/div/div[1]/div[2]/div/div/div/div[3]/div[4]/div[2]/div/div/ul/li[1]")
	public WebElement SecondTicketStatusPublish;
	
	@FindBy(how = How.XPATH, using = "/html/body/div[2]/section/div/div/form/div/div/div/div[1]/div[2]/div/div/div/div[2]/div[4]/div[2]/div/div/ul/li[2]")
	public WebElement FirstTicketStatusUnpublish;
	
	@FindBy(how = How.XPATH, using = "/html/body/div[2]/section/div/div/form/div/div/div/div[1]/div[2]/div/div/div/div[3]/div[4]/div[2]/div/div/ul/li[2]")
	public WebElement SecondTicketStatusUnpublish;
	
	@FindBy(how = How.XPATH, using = "//*[@id=\"jform_tickettypes__tickettypes0__price\"]")
	public WebElement FirstTicketPrice;
	
	@FindBy(how = How.XPATH, using = "//*[@id=\"jform_tickettypes__tickettypes1__price\"]")
	public WebElement SecondTicketPrice;
	
	@FindBy(how = How.XPATH, using = "//*[@id=\"jform_tickettypes__tickettypes0__ticket_enddate\"]")
	public WebElement FirstTickeEndDate;
	
	@FindBy(how = How.XPATH, using = "//*[@id=\"jform_tickettypes__tickettypes1__ticket_enddate\"]")
	public WebElement SecondTickeEndDate;
	
	@FindBy(how = How.XPATH, using = "//*[@id=\"jform_tickettypes__tickettypes0__unlimited_seats_chzn\"]/a/div/b")
	public WebElement FirstTicketSeatsAvailability;
	
	@FindBy(how = How.XPATH, using = "//*[@id=\"jform_tickettypes__tickettypes1__unlimited_seats_chzn\"]/a/div/b")
	public WebElement SecondTicketSeatsAvailability;
	
	@FindBy(how = How.XPATH, using = "/html/body/div[2]/section/div/div/form/div/div/div/div[1]/div[2]/div/div/div/div[2]/div[7]/div[2]/div/div/ul/li[1]")
	public WebElement FirstTicketUnlimitedSeats;
	
	@FindBy(how = How.XPATH, using = "/html/body/div[2]/section/div/div/form/div/div/div/div[1]/div[2]/div/div/div/div[3]/div[7]/div[2]/div/div/ul/li[1]")
	public WebElement SecondTicketUnlimitedSeats;
	
	@FindBy(how = How.XPATH, using = "/html/body/div[2]/section/div/div/form/div/div/div/div[1]/div[2]/div/div/div/div[2]/div[7]/div[2]/div/div/ul/li[2]")
	public WebElement FirstTicketLimitedSeats;
	
	@FindBy(how = How.XPATH, using = "/html/body/div[2]/section/div/div/form/div/div/div/div[1]/div[2]/div/div/div/div[3]/div[7]/div[2]/div/div/ul/li[2]")
	public WebElement SecondTicketLimitedSeats;
	
	@FindBy(how = How.XPATH, using = "//*[@id=\"jform_tickettypes__tickettypes0__available\"]")
	public WebElement FirstTicketSeatsCount;
	
	@FindBy(how = How.XPATH, using = "//*[@id=\"jform_tickettypes__tickettypes1__available\"]")
	public WebElement SecondTicketSeatsCount;
	
	@FindBy(how = How.XPATH, using = "/html/body/div[2]/section/div/div/form/div/div/div/div[1]/div[2]/div/div/div/div[2]/div[10]/div[2]/div/a/div/b")
	public WebElement FirstTicketAccess;
	
	@FindBy(how = How.XPATH, using = "/html/body/div[2]/section/div/div/form/div/div/div/div[1]/div[2]/div/div/div/div[3]/div[10]/div[2]/div/a/div/b")
	public WebElement SecondTicketAccess;
	
	@FindBy(how = How.XPATH, using = "/html/body/div[2]/section/div/div/form/div/div/div/div[1]/div[2]/div/div/div/div[2]/div[10]/div[2]/div/div/ul/li[1]")
	public WebElement FirstTicketAccessPublic;
	
	@FindBy(how = How.XPATH, using = "/html/body/div[2]/section/div/div/form/div/div/div/div[1]/div[2]/div/div/div/div[3]/div[10]/div[2]/div/div/ul/li[1]")
	public WebElement SecondTicketAccessPublic;
	
	@FindBy(how = How.XPATH, using = "/html/body/div[2]/section/div/div/form/div/div/div/div[1]/div[2]/div/div/div/div[2]/div[10]/div[2]/div/div/ul/li[2]")
	public WebElement FirstTicketAccessGuest;
	
	@FindBy(how = How.XPATH, using = "/html/body/div[2]/section/div/div/form/div/div/div/div[1]/div[2]/div/div/div/div[3]/div[10]/div[2]/div/div/ul/li[2]")
	public WebElement SecondTicketAccessGuest;
	
	@FindBy(how = How.XPATH, using = "/html/body/div[2]/section/div/div/form/div/div/div/div[1]/div[2]/div/div/div/div[2]/div[10]/div[2]/div/div/ul/li[3]")
	public WebElement FirstTicketAccessRegistered;
	
	@FindBy(how = How.XPATH, using = "/html/body/div[2]/section/div/div/form/div/div/div/div[1]/div[2]/div/div/div/div[3]/div[10]/div[2]/div/div/ul/li[3]")
	public WebElement SecondTicketAccessRegistered;
	
	@FindBy(how = How.XPATH, using = "/html/body/div[2]/section/div/div/form/div/div/div/div[1]/div[2]/div/div/div/div[2]/div[10]/div[2]/div/div/ul/li[5]")
	public WebElement FirstTicketAccessSuperUser;
	
	@FindBy(how = How.XPATH, using = "/html/body/div[2]/section/div/div/form/div/div/div/div[1]/div[2]/div/div/div/div[3]/div[10]/div[2]/div/div/ul/li[5]")
	public WebElement SecondTicketAccessSuperUser;
	
	//Attendee Fields
	
	@FindBy(how = How.LINK_TEXT, using = "Attendee Fields")
	public WebElement AttendeeFields;

	@FindBy(how = How.XPATH, using = "/html/body/div[2]/section/div/div/form/div/div/div/div[1]/div[3]/div/div/div/div[1]/div/a/span")
	public WebElement AddAttendeeField;
	
	@FindBy(how = How.XPATH, using = "//*[@id=\"jform_attendeefields__attendeefields0__label\"]")
	public WebElement FirstAttendeeFieldTitle;
	
	@FindBy(how = How.XPATH, using = "//*[@id=\"jform_attendeefields__attendeefields1__label\"]")
	public WebElement SecondAttendeeFieldTitle;
	
	@FindBy(how = How.XPATH, using = "/html/body/div[2]/section/div/div/form/div/div/div/div[1]/div[3]/div/div/div/div[2]/div[4]/div[2]/div/a/div/b")
	public WebElement SelectFirstAttendeeFieldType;
	
	@FindBy(how = How.XPATH, using = "/html/body/div[2]/section/div/div/form/div/div/div/div[1]/div[3]/div/div/div/div[3]/div[4]/div[2]/div/a/div/b")
	public WebElement SelectSecondAttendeeFieldType;
	
	@FindBy(how = How.XPATH, using = "/html/body/div[2]/section/div/div/form/div/div/div/div[1]/div[3]/div/div/div/div[2]/div[4]/div[2]/div/div/ul/li[2]")
	public WebElement FirstAttendeeFieldTypeText;
	
	@FindBy(how = How.XPATH, using = "/html/body/div[2]/section/div/div/form/div/div/div/div[1]/div[3]/div/div/div/div[3]/div[4]/div[2]/div/div/ul/li[2]")
	public WebElement SecondAttendeeFieldTypeText;
	
	@FindBy(how = How.XPATH, using = "/html/body/div[2]/section/div/div/form/div/div/div/div[1]/div[3]/div/div/div/div[2]/div[4]/div[2]/div/div/ul/li[3]")
	public WebElement FirstAttendeeFieldTypeTextArea;
	
	@FindBy(how = How.XPATH, using = "/html/body/div[2]/section/div/div/form/div/div/div/div[1]/div[3]/div/div/div/div[3]/div[4]/div[2]/div/div/ul/li[3]")
	public WebElement SecondAttendeeFieldTypeTextArea;
	
	@FindBy(how = How.XPATH, using = "/html/body/div[2]/section/div/div/form/div/div/div/div[1]/div[3]/div/div/div/div[2]/div[4]/div[2]/div/div/ul/li[4]")
	public WebElement FirstAttendeeFieldTypeSingleSelect;
	
	@FindBy(how = How.XPATH, using = "/html/body/div[2]/section/div/div/form/div/div/div/div[1]/div[3]/div/div/div/div[3]/div[4]/div[2]/div/div/ul/li[4]")
	public WebElement SecondAttendeeFieldTypeSingleSelect;
	
	@FindBy(how = How.XPATH, using = "/html/body/div[2]/section/div/div/form/div/div/div/div[1]/div[3]/div/div/div/div[2]/div[4]/div[2]/div/div/ul/li[5]")
	public WebElement FirstAttendeeFieldTypeMultipleSelect;
	
	@FindBy(how = How.XPATH, using = "/html/body/div[2]/section/div/div/form/div/div/div/div[1]/div[3]/div/div/div/div[3]/div[4]/div[2]/div/div/ul/li[5]")
	public WebElement SecondAttendeeFieldTypeMultipleSelect;
	
	@FindBy(how = How.XPATH, using = "/html/body/div[2]/section/div/div/form/div/div/div/div[1]/div[3]/div/div/div/div[2]/div[4]/div[2]/div/div/ul/li[6]")
	public WebElement FirstAttendeeFieldTypeDate;
	
	@FindBy(how = How.XPATH, using = "/html/body/div[2]/section/div/div/form/div/div/div/div[1]/div[3]/div/div/div/div[3]/div[4]/div[2]/div/div/ul/li[6]")
	public WebElement SecondAttendeeFieldTypeDate;
	
	@FindBy(how = How.XPATH, using = "/html/body/div[2]/section/div/div/form/div/div/div/div[1]/div[3]/div/div/div/div[2]/div[4]/div[2]/div/div/ul/li[7]")
	public WebElement FirstAttendeeFieldTypeRadio;
	
	@FindBy(how = How.XPATH, using = "/html/body/div[2]/section/div/div/form/div/div/div/div[1]/div[3]/div/div/div/div[3]/div[4]/div[2]/div/div/ul/li[7]")
	public WebElement SecondAttendeeFieldTypeRadio;
	
	@FindBy(how = How.XPATH, using = "//*[@id=\"jform_attendeefields__attendeefields0__inputboxdesc\"]")
	public WebElement FirstAttendeeFieldOptionsSeparatedBy;
	
	@FindBy(how = How.XPATH, using = "//*[@id=\"jform_attendeefields__attendeefields1__default_selected_option\"]")
	public WebElement SecondAttendeeFieldOptionsSeparatedBy;
	
	@FindBy(how = How.XPATH, using = "/html/body/div[2]/section/div/div/form/div/div/div/div[1]/div[3]/div/div/div/div[2]/div[6]/div[2]/div/a/div/b")
	public WebElement SelectFirstAttendeeFieldRequired;
	
	@FindBy(how = How.XPATH, using = "/html/body/div[2]/section/div/div/form/div/div/div/div[1]/div[3]/div/div/div/div[3]/div[6]/div[2]/div/a/div/b")
	public WebElement SelectSecondAttendeeFieldRequired;
	
	@FindBy(how = How.XPATH, using = "/html/body/div[2]/section/div/div/form/div/div/div/div[1]/div[3]/div/div/div/div[2]/div[6]/div[2]/div/div/ul/li[2]")
	public WebElement FirstAttendeeFieldRequiredNo;
	
	@FindBy(how = How.XPATH, using = "/html/body/div[2]/section/div/div/form/div/div/div/div[1]/div[3]/div/div/div/div[3]/div[6]/div[2]/div/div/ul/li[2]")
	public WebElement SecondAttendeeFieldRequiredNo;
	
	@FindBy(how = How.XPATH, using = "/html/body/div[2]/section/div/div/form/div/div/div/div[1]/div[3]/div/div/div/div[2]/div[6]/div[2]/div/div/ul/li[1]")
	public WebElement FirstAttendeeFieldRequiredYes;
	
	@FindBy(how = How.XPATH, using = "/html/body/div[2]/section/div/div/form/div/div/div/div[1]/div[3]/div/div/div/div[3]/div[6]/div[2]/div/div/ul/li[1]")
	public WebElement SecondAttendeeFieldRequiredYes;
	
    // Media Gallery
	
	@FindBy(how = How.LINK_TEXT, using = "Media Gallery")
	public WebElement MediaGallery;

	@FindBy(how = How.XPATH, using = "//*[@id=\"jform_gallery_file\"]")
	public WebElement SelectGalleryImage;
	
	@FindBy(how = How.XPATH, using = "//*[@id=\"gallery\"]/div[1]/div[2]/div[2]/input")
	public WebElement SelectGalleryVideo;
	
	@FindBy(how = How.XPATH, using = "//*[@id=\"gallery\"]/div[1]/div[2]/div[2]/input")
	public WebElement ValidateandAddVideo;

	@FindBy(how = How.XPATH, using = "//*[@id=\"toolbar-save\"]/button")
	public WebElement SaveandClose;
	
	@FindBy(how = How.XPATH, using = "//*[@id=\"toolbar-save-new\"]/button")
	public WebElement SaveandNew;
	
	@FindBy(how = How.XPATH, using = "//*[@id=\"toolbar-apply\"]/button")
	public WebElement Save;
	
	@FindBy(how = How.XPATH, using = "//*[@id=\"toolbar-cancel\"]/button")
	public WebElement Cancel;
	
	@FindBy(how = How.XPATH, using = "//*[@id=\"toolbar-options\"]/button/span")
	public WebElement Options;
	
	@FindBy(how = How.LINK_TEXT, using = "Classroom Training")
	public WebElement ClassroomTraining;
	
	@FindBy(how = How.XPATH, using = "//*[@id=\"jform_enable_self_enrollment\"]/label[1]")
	public WebElement ONclassroomtraining;

	@FindBy(how = How.XPATH, using = "//*[@id=\"toolbar-save\"]/button")
	public WebElement SaveConfig;
	
	public void SelectCreator() throws InterruptedException {
        
		WebDriverWait wait = new WebDriverWait(driver,20);
		
		Creator.click();
		wait.until(ExpectedConditions.visibilityOf(CreatorIFrame));
		CreatorIFrame.click();
		driver.switchTo().frame(CreatorIFrame);
		FirstCreator.click();
		driver.switchTo().defaultContent();
	}
	
    public void SelectCustomEventVenue(String customlocation) {
    	EventVenue.click();
    	EventVenueCustomLocation.click();
    	Eventlocation.sendKeys(customlocation);	
    }
	
    public void UploadVideo(String video) {
    	SelectGalleryVideo.sendKeys(video);
    	ValidateandAddVideo.click();
    }
    
	public CreateEventPage CreateEventWithRequiredFields(String eventtitle, String eventstartdate, String eventenddate, String firsttickettitle,
			String firstticketprice) throws Exception {
		WebDriverWait wait = new WebDriverWait(driver,20);
		
		wait.until(ExpectedConditions.visibilityOf(Events));
        ButtonClick(Events);
        wait.until(ExpectedConditions.visibilityOf(NewEvent));
		ButtonClick(NewEvent);
		EnterValue(Title, eventtitle);
		ClearAndEnterValue(EventStartDate, eventstartdate);
		ClearAndEnterValue(EventEndDate, eventenddate);
		SelectDropdownValue(SelectEventCategory, SecondEventCategory);
		wait.until(ExpectedConditions.visibilityOf(EventVenue));
		SelectDropdownValue(EventVenue, SecondEventVenue);
		wait.until(ExpectedConditions.visibilityOf(TicketTypes));
		ButtonClick(TicketTypes);
		ClearAndEnterValue(FirstTicketTitle, firsttickettitle);
		ClearAndEnterValue(FirstTicketPrice, firstticketprice);
		ButtonClick(SaveandClose);
		logger.pass("Event has created successfully with required details");
		return this;
		
	}
	

}
