# CodeIgniter-library-for-aws-php-sdk
A simple codeigniter library and config file to globably load the AWS object into $CI->aws

# Requirments
the AWS php sdk autoloaded, I recomend using composer

# Installation
1 - Copy the aws.php config file to your codeigniter config folder.  Update your region, and AWS credentials.
2 - move the Aws_library.php file to the codeigniter libraries folder.
3 - Optional but recomended, add 'aws_library' to the config/autoloader.php $autoload['libraries'] array

# Usage
Anywhere you would normally use, "$sdk = new Aws\Sdk" or similar, you can skip and use something like,

eg. $dynamodb = $this->aws->createDynamoDb();

Because the Aws_library.php globally assigns the initialization of the AWS SDK to $CI->aws, which is accessable at $this->aws in controllers and models.
