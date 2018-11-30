
## Features
* Upload localized screenshots
* Upload localized App Store descriptions, keywords, and other metadata
* Upload localized In-App Purchases
* Upload localized Game Center Achievements
* Upload localized Game Center Leaderboards

## Usage
###`app.config`
Setup your `app.config` file for your app.
`vendor_id` - The SKU for the app you want to update.
This can be found in iTunes Connect by navigating to your app, go to the App Information tab, then look under the General Information section.

`version` - The version of your app you're making updates to.
This only affects the app store metadata and screenshots, not IAP or Game Center.

'auto_name_screenshot' - if set true,appuploader will detect your screenshot ,if false,you will name screenshot follow the App Store Image  rules

### .appuploader  
this file is created and used by appuploader .never change or delete this file

## App Store Images
Use the following convention to name your app store images that you want to upload:

`<locale>_<base_image_name>_<index>.png`

For example :

```
3.5_0.png
4.0_0.png
4.7_0.png
5.5_0.png
9.7_0.png
12.9_0.png
3.5_1.png
4.0_1.png
4.7_1.png
5.5_1.png
9.7_1.png
12.9_1.png
```
Place these images in the locale subdirectory in the `Screenshot` directory (i.e. `Screenshot/de-DE`)

IAP, Achievement, and Leaderboard images should be placed in their respective subdirectories.

## Metadata
The way we provide the information to be uploaded comes in the form of `.csv`  files.
There are some stubbed examples in the subdirectories for each category we can provide information for.
The given filenames cannot be changed as of now, they are as follows:

`app_store/app_locales.cvs` - Provides the App title, keywords, software url, privacy url, and support url.

`app_store/des_en-US.txt` - Provides the App Store description in the given locale (en-US in this case.)

`iap/iap_metadata.csv` - Provides the id, reference name, type, cleared for sale, price tier, and image name for each in-app purchase.

`iap/iap_locales.csv` - Provides the title and description for each in-app purchase for each locale.

`achievements/achievements_metadata.csv` - Provides the id, reference name, points, and hidden for each achievement.

`achievements/achievements_locales.csv` - Provides the title, before description, after description, and image name for each achievement for each locale.

`leaderboards/leaderboards_metadata.csv` - Provides the id, reference name, and sort order for each leaderboard.

`leaderboards/leaderboards_locales.csv` - Provides the title, formatter type, and image name for each leaderboard for each locale.

## Caveats
### App Version
Make sure your app version exists in itunesconnect.apple.com before uploading any App Store screenshots or metadata.

### App keywords
keywords seperate with |,and this will be replaced with ,when submit

### Language Support
de-DE, en, es, fr, it, ja, ko, ms, nl-NL, pt-BR, pt-PT, ru, th

### iTunes Connect
It takes a little while for iTunes Connect to update with the information uploaded through the iTMSTransporter tool depending on the type of information you're uploading. App descriptions can take up to 5 minutes, achievements and leaderboards could take longer. After you run the script, just give it some time before checking iTunes Connect to ensure all the data is there.

# Need Help?

Please submit an issue on GitHub and provide information about your setup