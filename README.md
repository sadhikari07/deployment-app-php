# Simple PHP Application

##Team members:
- Xia Liu
- Sudip Adhikari
- Timothy Bush

## Steps on cretaing deployment environment:

### Elastic beanstalk
- Open the AWS Elastic beanstalk console.
- Select get started or Create new Application.
- Give your app a name, choose region, select platform (PHP), select sample application and click create.

### Code pipeline
- On your AWS CodePipeline console click create pipeline.
- Choose a pipeline name, select new service role and click next.
- Choose source provider (gitHub) and connect to gitHub by providing your credentials.
- Choose the repository and the branch (master) that you want to deploy.
- Select use GitHub webhooks and click next.
- Select skip build stage and click next.
- Choose deploy provider (Elastic Beanstalk), and choose the region, application name, and environment name(should auto-populate), and click next.
- Click create pipeline.

- To see auto-update, edit the index.php file and merge the commit to master. You should see the updates on your deployed website.



## Itegration 
- This app requires a running `Apache` or `nginx` server pointed to the folder where index.php resides

## Testing
- Open a terminal and change to the folder containing this application
- Run the tests
  - `./vendor/bin/phpunit --bootstrap vendor/autoload.php index.test.php`
